@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard Client</h1>
    <p class="text-lg text-gray-600 mb-4">Bonjour 👋, voici votre espace personnel</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Carte Commandes -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">📦 Voir mes commandes</h2>
            <p class="text-gray-500">Consultez l’état de vos commandes récentes.</p>
            <a href="{{ route('client.orders') }}" class="mt-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Accéder</a>
        </div>

        <!-- Carte Panier -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">🛒 Mon panier</h2>
            <p class="text-gray-500">Vos articles en attente de validation.</p>
            <a href="{{ route('client.cart') }}" class="mt-4 inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Voir mon panier</a>
        </div>

        <!-- Carte Historique -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">📜 Historique d’achats</h2>
            <p class="text-gray-500">Retrouvez toutes vos transactions passées.</p>
            <a href="{{ route('client.history') }}" class="mt-4 inline-block px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">Voir historique</a>
        </div>
    </div>
</div>
@endsection
