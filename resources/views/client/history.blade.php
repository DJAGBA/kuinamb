@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold">📜 Historique de mes commandes</h1>

    @if($orders->isEmpty())
        <p class="text-gray-500">Vous n'avez encore passé aucune commande.</p>
    @else
        <table class="table-auto w-full bg-white shadow-md rounded mt-6">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">Commande #</th>
                    <th class="px-4 py-2">Produit</th>
                    <th class="px-4 py-2">Prix</th>
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Statut</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $order->id }}</td>
                        <td class="px-4 py-2">{{ $order->product_name }}</td>
                        <td class="px-4 py-2">{{ $order->price }}€</td>
                        <td class="px-4 py-2">{{ $order->created_at->format('d/m/Y') }}</td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 text-sm font-semibold rounded
                            {{ $order->status == 'completed' ? 'bg-green-500 text-white' : 'bg-yellow-500 text-white' }}">
                                {{ $order->status == 'completed' ? 'Terminée' : 'En cours' }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $orders->links() }} <!-- Pagination -->
        </div>
    @endif
</div>
@endsection
