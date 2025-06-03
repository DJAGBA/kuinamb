@extends('layouts.app')

@section('title', 'Détails du produit')

@section('content')
    <h1>{{ $product->name }}</h1>

    <div>
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="max-width:300px;">
        @else
            <p>Aucune image disponible</p>
        @endif
    </div>

    <p><strong>Description :</strong> {{ $product->description }}</p>
    <p><strong>Prix :</strong> {{ number_format($product->price, 2, ',', ' ') }} €</p>
    <p><strong>Stock :</strong> {{ $product->stock }}</p>
    <p><strong>Catégorie :</strong> {{ $product->category->libelle ?? 'Non catégorisé' }}</p>

    <a href="{{ route('vendor.products.index') }}">Retour à la liste des produits</a>
    <a href="{{ route('vendor.products.edit', $product) }}">Modifier le produit</a>

    <form action="{{ route('vendor.products.destroy', $product) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">Supprimer</button>
    </form>
@endsection
