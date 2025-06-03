@extends('layouts.app')

@section('title', 'Modifier produit')

@section('content')
    <h1>Modifier produit : {{ $product->name }}</h1>

    <form action="{{ route('vendor.shop.products.update', [$shop, $product]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nom :</label><br>
        <input type="text" name="name" value="{{ old('name', $product->name) }}"><br>
        @error('name')<small style="color:red">{{ $message }}</small><br>@enderror

        <label>Description :</label><br>
        <textarea name="description">{{ old('description', $product->description) }}</textarea><br>
        @error('description')<small style="color:red">{{ $message }}</small><br>@enderror

        <label>Image actuelle :</label><br>
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" width="100" alt="image"><br>
        @endif

        <label>Nouvelle image :</label><br>
        <input type="file" name="image"><br>
        @error('image')<small style="color:red">{{ $message }}</small><br>@enderror

        <label>Prix (€) :</label><br>
        <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}"><br>
        @error('price')<small style="color:red">{{ $message }}</small><br>@enderror

        <label>Stock :</label><br>
        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}"><br>
        @error('stock')<small style="color:red">{{ $message }}</small><br>@enderror

        <label>Catégorie :</label><br>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select><br>
        @error('category_id')<small style="color:red">{{ $message }}</small><br>@enderror

        <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Mettre à jour
        </button>
    </form>
@endsection
