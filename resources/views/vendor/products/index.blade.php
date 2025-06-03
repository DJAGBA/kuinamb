@extends('layouts.app')

@section('title', 'Produits de la boutique')

@section('content')
    <h1>Produits de la boutique : {{ $shop->name }}</h1>

    <a href="{{ route('vendor.shop.products.create', $shop) }}">Ajouter un produit</a>
    <ul>
        @foreach($products as $product)
            <li>
                {{ $product->name }} — {{ number_format($product->price, 2) }} €
                | <a href="{{ route('vendor.shop.products.edit', [$shop, $product]) }}">Modifier</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('vendor.shop.show', $shop) }}">Retour à la boutique</a>
@endsection
