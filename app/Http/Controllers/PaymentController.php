<?php

namespace App\Http\Controllers;

use Exception;
use Omnipay\Omnipay;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class PaymentController extends Controller
{
    private $gateway;


    // omnipay
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env("PAYPAL_CLIENT_ID"));
        $this->gateway->setSecret(env("PAYPAL_CLIENT_SECRET"));
        $this->gateway->setTestMode(true);
    }

    public function charge(Request $request)
    {
        if ($request->input('submit')) {
            try {
                Session::put('order_id', $request->input('order_id'));
                Session::save();
                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'custom' => 33,
                    'items' => array(
                        array(
                            'name' => 'Paper writing payment',
                            'price' => $request->input('amount'),
                            'description' => 'Order in progress',
                            'quantity' => 1,
                        )
                    ),

                    'currency' => env("PAYPAL_CURRENCY"),
                    'returnUrl' => url("home/orders/payment-method/success"),
                    'cancelUrl' => url('/home/orders/payment-method/error'),


                ))->send();

                if ($response->isRedirect()) {
                    $response->redirect();
                } else {

                    return redirect()->back()->with('invalid', 'Please check your internet connection and retry');
                }
            } catch (Exception $e) {

                return redirect()->back()->with('invalid', '2');
            }
        }
    }

    public function success(Request $request)
    {

        if ($request->input('paymentId') && $request->input("PayerID")) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful()) {
                $arr_body = $response->getData();

                $order_id = Session::get('order_id');


                $payment = new Payment;
                $payment->payment_id = $arr_body['id'];
                $payment->order_id = $order_id;
                $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                $payment->currency = env("PAYPAL_CURRENCY");
                $payment->payment_status = $arr_body['state'];

                $payment->save();

                $order_update = DB::table('orders')->where('id', $order_id)->update([
                    'payment_status' => 1,
                ]);

                Session::forget('order_id');

                return redirect('/home/orders/on-going')->with('payment', 'Payment was successfull');
            } else {

                return redirect()->back()->with('invalid', 'Please check your internet connection and retry');
            }
        } else {
            return redirect()->back()->with('declined', 'Payment was declined');
        }
    }

    public function error()
    {
        return redirect()->back()->with('cancelled', 'Payment was cancelled');
    }
}
