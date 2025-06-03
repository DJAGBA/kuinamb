@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold">🏪 Mes Boutiques</h1>

    @if($shops->isEmpty())
        <p class="text-gray-500">Aucune boutique trouvée.</p>
        <a href="{{ route('vendor.shop.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            ➕ Créer une boutique
        </a>
    @else
        @foreach($shops as $shop)
            <div class="mb-4 p-4 border rounded shadow">
                <h2 class="text-xl font-semibold">{{ $shop->name }}</h2>
                <p>{{ $shop->description }}</p>
                <a href="{{ route('vendor.shop.edit', $shop->id) }}" class="text-blue-600 hover:underline">Modifier</a>
            </div>
        @endforeach

        <a href="{{ route('vendor.shop.create') }}" class="mt-4 inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            ➕ Créer une nouvelle boutique
        </a>
    @endif
</div>
@endsection
