@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">📊 Dashboard Vendeur</h1>
    <p class="text-lg text-gray-600 mb-4">Bienvenue 👋, voici votre espace de gestion</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Commandes reçues -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">📦 Commandes reçues</h2>
            <p class="text-gray-500">Gérez et expédiez vos dernières commandes.</p>
            <a href="{{ route('vendor.orders') }}" class="mt-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Voir les commandes
            </a>
        </div>

        <!-- Produits publiés -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">🛍️ Produits publiés</h2>
            <p class="text-gray-500">Visualisez et modifiez vos articles en vente.</p>
            <a href="{{ route('vendor.products.index') }}" class="mt-4 inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                Gérer mes produits
            </a>
        </div>

        <!-- Gestion de la boutique -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">🏪 Boutique : créer/modifier</h2>
            <p class="text-gray-500">Personnalisez votre boutique pour attirer plus de clients.</p>
            <a href="{{ route('vendor.shop') }}" class="mt-4 inline-block px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">
                Paramètres Boutique
            </a>
        </div>
    </div>

    <!-- ✅ Liste des boutiques -->
    <div class="mt-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">🛒 Mes boutiques</h2>

        @forelse($shops as $shop)
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h3 class="text-xl font-semibold text-blue-700">{{ $shop->name }}</h3>
                <p class="text-gray-600">{{ $shop->description }}</p>
            </div>
        @empty
            <p class="text-gray-500">Aucune boutique trouvée.</p>
        @endforelse
    </div>
</div>
@endsection
