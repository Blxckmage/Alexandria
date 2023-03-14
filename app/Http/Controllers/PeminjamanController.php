<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use App\Models\BorrowRequest;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('borrowing.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = Book::where('buku_judul', 'like', "%$query%")->get();


        return view('borrowing.index', [
            'books' => $books,
        ]);
    }

    public function clearSearch()
    {
        return redirect('/borrowing');
    }

    public function borrow($id)
    {
        $book = Book::find($id);
        return view('borrowing.borrow', [
            'book' => $book,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'borrowing_date' => 'required',
            'return_date' => 'nullable|date',
        ]);

        $validatedData['status'] = 'pending';

        // save the borrowing request
        BorrowRequest::create($validatedData);

        // redirect back with success message
        return redirect('/borrowing')->with('success', 'Your borrow request has been submitted successfully.');
    }
}
