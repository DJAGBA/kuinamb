<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    public function user()
{
    return $this->belongsTo(User::class);
}
public function history()
{
    $orders = Order::where('user_id', auth()->id())->latest()->paginate(10);
    return view('client.history', compact('orders'));
}


    public function index()
    {
        $orders = Order::with('user')->paginate(10);
        return view('client.orders', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted.');
    }
}
