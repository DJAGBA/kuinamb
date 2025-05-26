<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



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
});





Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::get('/about', fn() => view('pages.about'))->name('about');
Route::get('/contact', fn() => view('pages.contact'));
Route::get('/blog', fn() => view('pages.blog'));
Route::get('/shop', fn() => view('pages.shop'));
Route::get('/styles', fn() => view('pages.styles'));
Route::get('/thank-you', fn() => view('pages.thank-you'));
Route::get('/blog/{slug}', fn($slug) => view('pages.single-post'));
