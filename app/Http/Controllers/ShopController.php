<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;

class ShopController extends Controller
{
    public function index()
 {
 $shops = Shop::with('user')->paginate(10);
 return view('shops.index', compact('shops'));
 }
 public function create()
 {
 return view('shops.create');
 }
 public function store(Request $request)
 {
 $validated = $request->validate([
 'name' => 'required',
 'slug' => 'required|unique:shops',
 ]);
 $shop = Shop::create(array_merge($validated, ['user_id' => auth()->id()]));
 return redirect()->route('shops.index')->with('success', 'Shop created.');
 }
 public function show(Shop $shop)
 {
 return view('shops.show', compact('shop'));
 }
 public function edit(Shop $shop)
 {
 return view('shops.edit', compact('shop'));
 }
 public function update(Request $request, Shop $shop)
 {
 $validated = $request->validate(['name' => 'required']);
 $shop->update($validated);
 return redirect()->route('shops.index')->with('success', 'Shop
updated.');
 }
 public function destroy(Shop $shop)
 {
 $shop->delete();
 return redirect()->route('shops.index')->with('success', 'Shop
deleted.');
 }
}
