<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{public function index()
{
    $cartItems = session()->get('cart', []); // Récupérer les produits du panier en session

    return view('client.cart', compact('cartItems'));
}


    public function show(Cart $cart)
    {
        return view('client.cart.show', compact('cart'));
    }

    public function destroy(Cart $cart)
    {
        if ($cart) {
            $cart->delete();
            return redirect()->route('client.cart')->with('success', 'Article supprimé du panier.');
        }

        return redirect()->route('client.cart')->with('error', 'Article introuvable.');
    }
    public function updateCart(Request $request, $id)
{
    $cart = session()->get('cart', []);
    if (isset($cart[$id])) {
        $cart[$id]['quantity'] = $request->input('quantity');
        session()->put('cart', $cart);
    }
    return redirect()->route('cart')->with('success', 'Quantité mise à jour !');
}

public function removeFromCart($id)
{
    $cart = session()->get('cart', []);
    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }
    return redirect()->route('cart')->with('success', 'Produit supprimé !');
}

public function clearCart()
{
    session()->forget('cart');
    return redirect()->route('cart')->with('success', 'Panier vidé !');
}
 public function addToCart(Request $request)
{
    try {
        $productId = $request->input('product_id');
        \Log::info("Produit reçu : " . $productId); // TEST LOG

        // Vérifie si la session contient déjà un panier
        $cart = session()->get('cart', []);
        \Log::info("Avant ajout, contenu du panier : " . json_encode($cart)); // TEST LOG

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            $product = Product::find($productId);
            if (!$product) {
                \Log::error("❌ Produit introuvable : ID " . $productId);
                return response()->json(['success' => false, 'message' => '❌ Produit introuvable.']);
            }

            $cart[$productId] = [
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => 1,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        \Log::info("✅ Après ajout, contenu du panier : " . json_encode(session()->get('cart')));

        return response()->json(['success' => true, 'message' => '✅ Produit ajouté au panier !']);
    } catch (\Exception $e) {
        \Log::error("Erreur dans addToCart : " . $e->getMessage());
        return response()->json(['success' => false, 'message' => '❌ Erreur serveur. Vérifie `storage/logs/laravel.log`.']);
    }
}


}
