<?php

namespace App\Http\Controllers;
use App\Models\categorie;
use App\Models\Product;
use Illuminate\Http\Request; // ✅ Importation nécessaire pour les requêtes

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('vendor.products', compact('products')); // ✅ Correction du nom de la vue
    }

 public function create()
{
    // Récupérer la boutique du vendeur connecté
    $shop = auth()->user()->shop;  // Ajuste selon ta relation utilisateur -> boutique

    if (!$shop) {
        // Gérer le cas où l'utilisateur n'a pas encore de boutique
        return redirect()->route('vendor.products.index')
            ->with('error', 'Vous devez avoir une boutique pour ajouter un produit.');
    }

    // Récupérer les catégories pour le formulaire
    $categories = Category::all();

    // Afficher la vue de création avec les données nécessaires
    return view('vendor.products.create', compact('shop', 'categories'));
}


    public function store(Request $request) // ✅ Ajout de Request
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'slug' => 'required|unique:products|max:255',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        Product::create($validated);

        return redirect()->route('vendor.products')->with('success', 'Produit ajouté avec succès.'); // ✅ Correction de la route
    }

    public function show(Product $product)
    {
        return view('vendor.products.show', compact('product')); // ✅ Correction du nom de la vue
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('vendor.products.edit', compact('product', 'categories')); // ✅ Correction du nom de la vue
    }

    public function update(Request $request, Product $product) // ✅ Ajout de Request
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'required|unique:products,slug,' . $product->id . '|max:255', // ✅ Ajout de la validation pour le slug
        ]);


        $product->update($validated);

        return redirect()->route('vendor.products')->with('success', 'Produit mis à jour avec succès.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('vendor.products')->with('success', 'Produit supprimé avec succès.');
    }
}
