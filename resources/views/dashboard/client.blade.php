@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard Client</h1>
    <p>Bonjour {{ Auth::user()->name }} 👋</p>
    <ul>
        <li>Voir mes commandes</li>
        <li>Mon panier</li>
        <li>Historique d’achats</li>
    </ul>
</div>
@endsection
