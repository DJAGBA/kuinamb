<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;

class CartController extends Controller
{

    public function index()
    {
        $carts = Cart::with('user')->paginate(10);
        return view('carts.index', compact('carts'));
    }

    public function show(Cart $cart)
    {
        return view('carts.show', compact('cart'));
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('carts.index')->with('success', 'Cart deleted.');
    }
}
