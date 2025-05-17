<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/about', fn() => view('pages.about'));
Route::get('/contact', fn() => view('pages.contact'));
Route::get('/blog', fn() => view('pages.blog'));
Route::get('/shop', fn() => view('pages.shop'));
Route::get('/styles', fn() => view('pages.styles'));
Route::get('/thank-you', fn() => view('pages.thank-you'));
Route::get('/blog/{slug}', fn($slug) => view('pages.single-post'));
