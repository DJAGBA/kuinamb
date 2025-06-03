@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold">🛍️ Produits publiés</h1>

    @if($products->isEmpty())
        <p class="text-gray-500">Aucun produit publié.</p>
    @else
        <table class="table-auto w-full bg-white shadow-md rounded mt-6">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">Nom du produit</th>
                    <th class="px-4 py-2">Prix</th>
                    <th class="px-4 py-2">Stock</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $product->name }}</td>
                        <td class="px-4 py-2">{{ $product->price }}€</td>
                        <td class="px-4 py-2">{{ $product->stock }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('vendor.product.edit', $product->id) }}" class="text-blue-500">Modifier</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
