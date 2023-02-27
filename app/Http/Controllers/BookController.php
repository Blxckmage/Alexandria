<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books', [
            'books' => Book::all(),
            'categories' => Category::all(),
            'publishers' => Publisher::all(),
        ]);
    }

    public function show($id)
    {
        return view('book', [
            'book' => Book::find($id),
            'categories' => Category::all(),
            'publishers' => Publisher::all(),
        ]);
    }
}
