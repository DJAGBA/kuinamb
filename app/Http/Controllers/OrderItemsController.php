<?php

namespace App\Http\Controllers;

use App\Models\Order_items;
use App\Http\Requests\StoreOrder_itemsRequest;
use App\Http\Requests\UpdateOrder_itemsRequest;

class OrderItemsController extends Controller
{
    public function index()
    {
        $items = OrderItem::with('product', 'order')->paginate(10);
        return view('order_items.index', compact('items'));
    }

    public function show(OrderItem $orderItem)
    {
        return view('order_items.show', compact('orderItem'));
    }

    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();
        return redirect()->route('order-items.index')->with('success', 'Order item deleted.');
    }
}
