<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home', [
            'books' => Book::take(5)->get(),
            'allBooks' => Book::all()
        ]);
    }
}
