<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_orders = Order::where('user_id', auth()->user()->id)->count();
        $total_ongoing = Order::where('user_id', auth()->user()->id)
            ->where('payment_status', true)
            ->count();
        $total_inProcess = Order::where('user_id', auth()->user()->id)
            ->where('payment_status', false)
            ->count();
        $total_completed = Order::where('user_id', auth()->user()->id)
            ->where('order_status', true)
            ->count();

        return view('home', ['total_orders' => $total_orders, 'total_ongoing' => $total_ongoing, 'total_inProcess' => $total_inProcess, 'total_completed' => $total_completed]);
    }
    public function handleAdmin()
    {
        return view('admin');
    }
}
