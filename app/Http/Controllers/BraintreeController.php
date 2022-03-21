<?php

namespace App\Http\Controllers;

use App\Models\Braintree;
use Braintree_Transaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BraintreeController extends Controller
{
    public function token(Request $request)
    {
        $id = $request->route('id');
        $id = decrypt($id);
        $braintree = config('braintree');
        $clienttoken = $braintree->clientToken()->generate();

        return view('client.card', ['token' => $clienttoken, 'id' => $id]);
    }

    public function process(Request $request)
    {

        if ($request->input('payment_method_nonce') !== null) {
            $id = decrypt($request->route('id'));
            $order_id = DB::table('orders')->where('id', $id)->select('id')->pluck('id')->first();
            $order_cost = DB::table('orders')->where('id', $id)->select('order_cost')->pluck('order_cost')->first();
            $nonce = $request->input("payment_method_nonce");

            $braintree = config('braintree');

            $result = $braintree->transaction()->sale([
                'amount' => $order_cost,
                'paymentMethodNonce' => $nonce,
                'options' => [
                    'submitForSettlement' => True
                ]
            ]);
            if ($result->success == true) {

                $payment = new Braintree;
                $payment->payment_id = $result->transaction->id;
                $payment->order_id = $order_id;
                $payment->amount = $result->transaction->amount;
                $payment->currency = $result->transaction->currencyIsoCode;
                $payment->order_name = $result->transaction->merchantAccountId;
                $payment->payment_status = $result->transaction->statusHistory[0]->status;
                $payment->card_type = $result->transaction->creditCard["cardType"];
                $payment->customer_location = $result->transaction->creditCard["customerLocation"];

                $payment->save();
                $order_update = DB::table('orders')->where('id', $id)->update([
                    'payment_status' => 1,
                ]);
                return redirect(route('detailOngoing', encrypt($id)))->with('payment', 'Payment was successfull');
            } else {
                return redirect()->back()->with('transaction_error', 'Transaction was declined please try again');
            }
        } else {
            return redirect()->back()->with('error', 'Payment was not successful please try again');
        }
    }
}
