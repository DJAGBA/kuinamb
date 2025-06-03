@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold">🏪 Créer une boutique</h1>

    <form method="POST" action="{{ route('vendor.shop.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-lg font-semibold">Nom de la boutique</label>
            <input type="text" name="name" class="w-full p-2 border rounded" placeholder="Nom de votre boutique" required>
        </div>

        <div class="mb-4">
            <label class="block text-lg font-semibold">Slug</label>
            <input type="text" name="slug" class="w-full p-2 border rounded" placeholder="ex: ma-boutique" required>
        </div>

        <div class="mb-4">
            <label class="block text-lg font-semibold">Logo</label>
            <input type="file" name="logo" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block text-lg font-semibold">Description</label>
            <textarea name="description" class="w-full p-2 border rounded" placeholder="Parlez de votre boutique"></textarea>
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            🚀 Créer ma boutique
        </button>
    </form>
</div>
@endsection
