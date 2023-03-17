<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use Illuminate\Http\Request;

class AdminDendaController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::where('detail_status_kembali', '!=', 1)->get();

        return view('admin.denda', [
            'borrowings' => $borrowings
        ]);
    }

    public function update(Request $request, $id)
    {
        $borrowing = Borrowing::find($id);
        $borrowing->detail_denda = $request->input('denda');
        $borrowing->update();
        return redirect()->back();
    }
}
