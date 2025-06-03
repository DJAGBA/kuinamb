@extends('layouts.app')

@section('title', 'Modifier boutique')

@section('content')
    <h1>Modifier boutique : {{ $shop->name }}</h1>

    <form action="{{ route('vendor.shop.update', $shop) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Nom :</label><br>
        <input type="text" name="name" value="{{ old('name', $shop->name) }}"><br>
        @error('name')<small style="color:red">{{ $message }}</small><br>@enderror

        <label>Description :</label><br>
        <textarea name="description">{{ old('description', $shop->description) }}</textarea><br>
        @error('description')<small style="color:red">{{ $message }}</small><br>@enderror

        <label>Logo actuel :</label><br>
        @if($shop->logo)
            <img src="{{ asset('storage/' . $shop->logo) }}" width="100" alt="logo"><br>
        @endif
        <label>Nouveau logo :</label><br>
        <input type="file" name="logo"><br>
        @error('logo')<small style="color:red">{{ $message }}</small><br>@enderror

        <label>URL (slug) :</label><br>
        <input type="text" name="slug" value="{{ old('slug', $shop->slug) }}"><br>
        @error('slug')<small style="color:red">{{ $message }}</small><br>@enderror

        <button type="submit">Mettre à jour</button>
    </form>
@endsection
