<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $borrowings = Borrowing::where('peminjam_kode', $user->id)->get();

        return view('user.index', [
            'user' => $user,
            'borrowings' => $borrowings
        ]);
    }

    public function bayar($id)
    {
        $borrowing = Borrowing::find($id);
        $borrowing->update(['detail_denda' => 0]);

        return redirect()->back()->with('success', 'Denda berhasil dibayar');
    }
}
