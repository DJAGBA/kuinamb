@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard Vendeur</h1>
    <p>Bienvenue {{ Auth::user()->name }} 👋</p>
    <ul>
        <li>Commandes reçues</li>
        <li>Produits publiés</li>
        <li>Boutique : créer / modifier</li>
    </ul>
</div>
@endsection
