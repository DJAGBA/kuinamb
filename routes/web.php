<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return 'Bienvenue Admin';
//     });
// });

Route::middleware(['auth', 'vendeur'])->group(function () {
    Route::get('/vendeur/dashboard', function () {
        return view('dashboard.vendeur');
    })->name('vendeur.dashboard');
     Route::get('/vendeur/dashboard', [VendorController::class, 'index'])->name('vendeur.dashboard');
    Route::get('/vendor/orders', [OrderController::class, 'index'])->name('vendor.orders');
    Route::get('/vendor/products', [ProductController::class, 'index'])->name('vendor.products.index');
    Route::post('/vendor/products/store', [ProductController::class, 'store'])->name('vendor.products.store');
    Route::get('/vendor/products/create', [ProductController::class, 'create'])->name('vendor.products.create');
    Route::get('/vendor/products/{product}', [ProductController::class, 'show'])->name('vendor.products.show');
    // Route::get('/vendor/products/{product}', [ProductController::class, 'show'])->name('vendor.products.show');
    Route::get('/vendor/products/{product}/edit', [ProductController::class, 'edit'])->name('vendor.products.edit');
    // Route::put('/vendor/products/{product}', [ProductController::class, 'update'])->name('vendor.products.update');
    // Route::delete('/vendor/products/{product}', [ProductController::class, 'destroy'])->name('vendor.products.destroy');
    Route::get('/vendor/shop', [ShopController::class, 'index'])->name('vendor.shop');
    Route::get('/vendor/shop/create', [ShopController::class, 'create'])->name('vendor.shop.create');
    Route::post('/vendor/shop', [ShopController::class, 'store'])->name('vendor.shop.store');
     Route::get('/vendor/shop/{shop}', [ShopController::class, 'show'])->name('vendor.shop.show');
    Route::get('/vendor/shop/{shop}/edit', [ShopController::class, 'edit'])->name('vendor.shop.edit');
    // Route::put('/vendor/shop/{shop}', [ShopController::class, 'update'])->name('vendor.shop.update');
});

// Route::middleware(['auth', 'client'])->group(function () {
//     Route::get('/client/dashboard', function () {
//         return 'Bienvenue Client';
//     });
// });
Route::middleware(['auth', 'client'])->group(function () {
    Route::get('/client/dashboard', function () {
        return view('dashboard.client');
    })->name('client.dashboard');
Route::get('/client/orders', [OrderController::class, 'index'])->name('client.orders');
Route::get('/client/cart', [CartController::class, 'index'])->name('client.cart');
Route::get('/client/cart/{cart}', [CartController::class, 'show'])->name('client.cart.show');
Route::delete('/client/cart/{cart}', [CartController::class, 'destroy'])->name('client.cart.destroy');
Route::get('/client/history', [OrderController::class, 'history'])->name('client.history');

});


//  Route::get('/cart', [CartItemsController::class, 'index'])->name('cart.index');
//  Route::post('/cart/add', [CartItemsController::class, 'add'])->name('cart.add');
// Route::post('/cart/update/{productId}', [CartItemsController::class, 'update'])->name('cart.update');
// Route::post('/cart/remove/{productId}', [CartItemsController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::get('/index', [CartController::class, 'index'])->name('index');



Route::get('/home', function () {
    $products = Product::all(); // Récupérer tous les produits
    return view('pages.home', compact('products'));
})->name('home');



Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::get('/about', fn() => view('pages.about'))->name('about');
Route::get('/contact', fn() => view('pages.contact'))->name('contact') ;
Route::get('/blog', fn() => view('pages.blog'))->name('blog');
Route::get('/shop', fn() => view('pages.shop'))->name('shop');
Route::get('/styles', fn() => view('pages.styles'))->name('styles');
Route::get('/thank-you', fn() => view('pages.thank-you'))->name('thank-you');
Route::get('/blog/{slug}', fn($slug) => view('pages.single-post'))->name('blog.post');




Route::get('/index', fn() => view('pages.index'))->name('index');
Route::post('paniers', [CartController::class, 'addToCart'])->name('users.addToCart');
