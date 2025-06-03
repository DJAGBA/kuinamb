@extends('layouts.app')

@section('content')
<div class="container">
    <h2>🛒 Mon Panier</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(isset($cart) && is_array($cart) && count($cart) > 0)

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Produit</th>
                <th>Prix Unitaire</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $totalPrice = 0; @endphp
            @foreach($cart as $id => $item)
                @php
                    $itemTotal = $item['price'] * $item['quantity'];
                    $totalPrice += $itemTotal;
                @endphp
                <tr>
                    <td><img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" width="80"></td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ number_format($item['price'], 2) }} €</td>
                    <td>
                        <form action="{{ route('cart.update', $id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width: 60px;">
                            <button type="submit" class="btn btn-sm btn-info">Modifier</button>
                        </form>
                    </td>
                    <td>{{ number_format($itemTotal, 2) }} €</td>
                    <td>
                        <form action="{{ route('cart.remove', $id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">Supprimer</button>
                        </form>
                        <form action="{{ route('cart.clear') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-warning">🗑️ Vider le panier</button>
</form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4" class="text-right"><strong>Total :</strong></td>
                <td colspan="2"><strong>{{ number_format($totalPrice, 2) }} €</strong></td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('checkout') }}" class="btn btn-success">Passer à la caisse</a>

    @else
    <div class="alert alert-info">
        <p>Votre panier est actuellement vide. Ajoutez des produits pour commencer vos achats !</p>
    </div>
    <a href="{{ route('home') }}" class="btn btn-primary">🛍️ Continuer mes achats</a>
@endif

</div>
@endsection
