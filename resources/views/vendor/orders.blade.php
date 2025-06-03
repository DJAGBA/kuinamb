@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold">📦 Commandes reçues</h1>

    @if($orders->isEmpty())
        <p class="text-gray-500">Aucune commande reçue.</p>
    @else
        <table class="table-auto w-full bg-white shadow-md rounded mt-6">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">Commande #</th>
                    <th class="px-4 py-2">Client</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2">Statut</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $order->id }}</td>
                        <td class="px-4 py-2">{{ $order->customer_name }}</td>
                        <td class="px-4 py-2">{{ $order->total_price }}€</td>
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
            {{ $orders->links() }}
        </div>
    @endif
</div>
@endsection
