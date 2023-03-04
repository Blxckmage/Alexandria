<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('peminjaman');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = Book::where('buku_judul', 'like', "%$query%")->get();

        return view('peminjaman', [
            'books' => $books,
        ]);
    }

    public function clearSearch()
    {
        return redirect('/peminjaman');
    }
}
