@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold">🛒 Mon Panier</h1>

    @if($cartItems->isEmpty())
        <p class="text-gray-500">Votre panier est vide.</p>
    @else
        <table class="table-auto w-full bg-white shadow-md rounded mt-6">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">Produit</th>
                    <th class="px-4 py-2">Quantité</th>
                    <th class="px-4 py-2">Prix</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $item->product_name }}</td>
                        <td class="px-4 py-2">{{ $item->quantity }}</td>
                        <td class="px-4 py-2">{{ $item->price }}€</td>
                        <td class="px-4 py-2">
                            <form method="POST" action="{{ route('client.cart.remove', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">
                                    Retirer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
