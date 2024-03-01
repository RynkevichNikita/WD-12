<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Events\OrderStatus;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('orders', [
            'orders' => $orders,
        ]);
    }

    public function update(Request $request)
    {
        $order = Order::find($request->orderNumber);
        $order->status = $request->status;
        $order->save();
        
        OrderStatus::dispatch($order);

        return 'ok';
    }
}
