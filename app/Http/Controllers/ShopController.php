<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;

class ShopController extends Controller
{
<<<<<<< HEAD
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
=======
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShopRequest $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        //
    }
>>>>>>> dda8ac4ee198f86dc43f57f9fa57777b11523c12
}
