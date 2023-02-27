<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
    public function index()
    {
        return view('admin.tambah-buku', [
            'books' => Book::all(),
            'categories' => Category::all(),
            'publishers' => Publisher::all(),
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori_kode' => 'required',
            'penerbit_kode' => 'required',
            'buku_judul' => 'required',
            'buku_jumhal' => 'required|numeric',
            'buku_deskripsi' => 'required',
            'buku_pengarang' => 'required',
            'buku_tahun_terbit' => 'required|numeric',
        ]);

        Book::create($validatedData);
        return redirect()->back()->with('success', 'Category added successfully.');
    }
}
