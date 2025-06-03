<?php

namespace App\Http\Controllers;

use App\Models\Product; // Pense à importer ton modèle Product

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer les 10 derniers produits (ou adapte selon ta logique)
        $products = Product::latest()->take(10)->get();

        // Passer les produits à la vue 'home'
       return view('pages.home', compact('products'));

    }
}
