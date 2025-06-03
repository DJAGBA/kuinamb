@extends('layouts.app')

@section('title', 'Détails boutique')

@section('content')
    <h1>{{ $shop->name }}</h1>
    <p>{{ $shop->description }}</p>
    @if($shop->logo)
        <img src="{{ asset('storage/' . $shop->logo) }}" width="150" alt="logo">
    @endif
    <p>URL : {{ $shop->slug }}</p>

    <a href="{{ route('vendor.shop.products.index', $shop) }}">Voir les produits</a><br>
    <a href="{{ route('vendor.shop.edit', $shop) }}">Modifier la boutique</a><br>
    <a href="{{ route('vendor.shop.index') }}">Retour à la liste</a>
@endsection
