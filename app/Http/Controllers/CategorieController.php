<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categories::paginate(10);
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories'
        ]);

        Categories::create($validated);

        return redirect()->route('categories.index')->with('success', 'Categories created.');
    }

    public function show(Categories $categories)
    {
        return view('categories.show', compact('categories'));
    }

    public function edit(Categories $categories)
    {
        return view('categories.edit', compact('categories'));
    }

    public function update(Request $request, Categories $categories)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $categories->update($validated);

        return redirect()->route('categories.index')->with('success', 'Categories updated.');
    }

    public function destroy(Categories $categories)
    {
        $categories->delete();
        return redirect()->route('categories.index')->with('success', 'Categories deleted.');
    }
}
