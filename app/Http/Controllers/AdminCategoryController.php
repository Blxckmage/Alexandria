<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.tambah-kategori', [
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori_nama' => 'required|max:255|unique:categories,kategori_nama',
        ]);

        Category::create($validatedData);
        return redirect()->back()->with('success', 'Category added successfully.');
    }

    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('tambah-kategori')->with('success', 'Category has been deleted!');
    }
}
