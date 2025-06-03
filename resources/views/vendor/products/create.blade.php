<form method="POST" action="{{ route('vendor.products.store') }}" enctype="multipart/form-data">
    @csrf

    <!-- Champ caché pour la boutique -->
    <input type="hidden" name="shop_id" value="{{ $shop->id }}">

    <label class="block text-lg font-semibold">Nom du produit</label>
    <input type="text" name="name" class="w-full p-2 border rounded" required>

    <label class="block text-lg font-semibold mt-4">Prix (€)</label>
    <input type="number" name="price" class="w-full p-2 border rounded" required>

    <label class="block text-lg font-semibold mt-4">Stock</label>
    <input type="number" name="stock" class="w-full p-2 border rounded" required>

    <label class="block text-lg font-semibold mt-4">Image du produit</label>
    <input type="file" name="image" class="w-full p-2 border rounded">

    <label class="block text-lg font-semibold mt-4">Description</label>
    <textarea name="description" class="w-full p-2 border rounded"></textarea>

    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 mt-4">
        Ajouter le produit
    </button>
</form>
