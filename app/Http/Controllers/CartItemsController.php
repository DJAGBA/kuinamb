<?php

namespace App\Http\Controllers;

use App\Models\Cart_items;
use App\Http\Requests\StoreCart_itemsRequest;
use App\Http\Requests\UpdateCart_itemsRequest;

class CartItemsController extends Controller
{
    public function index()
    {
        $items = CartItem::with('cart', 'product')->paginate(10);
        return view('cart_items.index', compact('items'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cart_id' => 'required|exists:carts,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        CartItem::create($validated);

        return redirect()->back()->with('success', 'Item added to cart.');
    }

    public function update(Request $request, CartItem $cartItem)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem->update($validated);

        return redirect()->back()->with('success', 'Cart item updated.');
    }

    public function destroy(CartItem $cartItem)
    {
        $cartItem->delete();
        return redirect()->back()->with('success', 'Item removed from cart.');
    }
}
