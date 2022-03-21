<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function getOngoing($id)
    {
        $id = decrypt($id);
        $orders = DB::table('orders')->where('id', $id)->get();

        return view('client.detailOngoing', ['orders' => $orders]);
    }
    public function getInProcess($id)
    {
        $id = decrypt($id);
        $orders = DB::table('orders')->where('id', $id)->get();

        return view('client.detailInProcess', ['orders' => $orders]);
    }
    public function handleGet($id)
    {
        $id = decrypt($id);
        $orders = DB::table('orders')->where('order_id', $id)->get();

        return view('client.payment', ['orders' => $orders]);
    }
    public function downloadFile($fileName)
    {
        return Storage::download("client_uploads/$fileName");
    }
}
