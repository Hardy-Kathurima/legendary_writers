<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function getInProcess($order_id)
    {
        $order_id = decrypt($order_id);
        $user_id = Order::where('id', $order_id)->value('user_id');

        return view("admin.detailProcess", ['order_id' => $order_id, 'user_id' => $user_id]);
    }

    public function getOngoing($order_id)
    {
        $order_id = decrypt($order_id);
        $user_id = Order::where('id', $order_id)->value('user_id');

        return view("admin.detailOngoing", ['order_id' => $order_id, 'user_id' => $user_id]);
    }
    public function getCompleted($order_id)
    {
        $order_id = decrypt($order_id);
        $user_id = Order::where('id', $order_id)->value('user_id');

        return view("admin.detailCompleted", ['order_id' => $order_id, 'user_id' => $user_id]);
    }
    public function downloadFile($fileName)
    {
        return Storage::download("admin_uploads/$fileName");
    }
    public function downloadClient($fileName)
    {
        return Storage::download("client_uploads/$fileName");
    }
}
