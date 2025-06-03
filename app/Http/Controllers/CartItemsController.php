<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartItemsController extends Controller
{
    // Ajouter un produit au panier (stocké en session)
    public function store(Request $request)
    {
        // Validation des données reçues
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Récupérer le panier actuel depuis la session (ou tableau vide)
        $cart = session()->get('cart', []);

        $productId = $request->product_id;
        $quantity = $request->quantity;

        // Vérifier si le produit est déjà dans le panier
        if (isset($cart[$productId])) {
            // Incrémenter la quantité
            $cart[$productId]['quantity'] += $quantity;
        } else {
            // Récupérer les infos du produit depuis la base
            $product = Product::find($productId);

            // Ajouter le produit au panier
            $cart[$productId] = [
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => $product->price,
                'image' => $product->image,  // optionnel, si tu as une image
            ];
        }

        // Sauvegarder le panier dans la session
        session()->put('cart', $cart);

        // Retourner à la page précédente avec un message succès
        return redirect()->back()->with('success', 'Produit ajouté au panier.');
    }

    // Méthode pour afficher la page panier (optionnel)
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // Méthode pour supprimer un produit du panier (optionnel)
    public function destroy($productId)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Produit supprimé du panier.');
    }
}
