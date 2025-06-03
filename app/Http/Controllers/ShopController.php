<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // ✅ Ajout de Auth

class ShopController extends Controller
{
    // 📌 Affichage de la boutique du vendeur
    public function index()
    {
        $shops = Shop::where('user_id', auth()->id())->get();
        return view('vendor.shop', compact('shops')); // ✅ Correction du nom de la vue
    }

    // 🏪 Création d'une nouvelle boutique
    public function create()
    {
        return view('vendor.shop.create');
    }

    // ✅ Correction : Ajout de Request dans store()
   public function store(Request $request)
{
    // dd($request->all());  <-- à supprimer

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'required|unique:shops|max:255',
    ]);

    Shop::create([
        'name' => $validated['name'],
        'slug' => $validated['slug'],
        'user_id' => Auth::id(),
    ]);

    return redirect()->route('vendor.shop')->with('success', 'Boutique créée avec succès.');
}

    // 📌 Voir une boutique spécifique
    public function show(Shop $shop)
    {
          dd($shop);
        return view('vendor.shop.show', compact('shop')); // ✅ Correction du nom de la vue
    }

    // 🛠 Modifier la boutique
    public function edit(Shop $shop)
    {
        return view('vendor.shop.edit', compact('shop'));
    }

    // ✅ Correction : Ajout de Request dans update()
    public function update(Request $request, Shop $shop)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $shop->update($validated);

        return redirect()->route('vendor.shop')->with('success', 'Boutique mise à jour.');
    }

    // 🚨 Suppression d'une boutique
    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect()->route('vendor.shop')->with('success', 'Boutique supprimée.');
    }
}
