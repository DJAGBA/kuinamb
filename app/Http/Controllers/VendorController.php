<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Product;
use App\Models\Shop;

class VendorController extends Controller
{
     public function index()
    {
        // Récupère toutes les boutiques du vendeur connecté
        $shops = Shop::where('user_id', Auth::id())->get();

        // Envoie les boutiques à la vue
        return view('dashboard.vendeur', compact('shops'));
    }
    // 📦 Gestion des commandes
    public function orders()
    {
        $orders = Order::where('vendor_id', auth()->id())->latest()->paginate(10);
        return view('vendor.orders', compact('orders'));
    }

    // 🛍️ Gestion des produits
    public function products()
    {
        $products = Product::where('vendor_id', auth()->id())->latest()->paginate(10);
        return view('vendor.products', compact('products'));
    }

    // 🏪 Paramètres de la boutique
    public function shop()
    {
       $shops = Shop::where('user_id', Auth::id())->get();
        return view('vendor.shop', compact('shop'));
    }
}

