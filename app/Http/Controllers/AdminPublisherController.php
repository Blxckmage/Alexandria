<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class AdminPublisherController extends Controller
{
    public function index()
    {
        return view('admin.tambah-penerbit', [
            'publishers' => Publisher::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'penerbit_nama' => 'required|string|max:20',
            'penerbit_alamat' => 'required|string|max:50',
            'penerbit_telp' => 'required|numeric',
        ]);

        Publisher::create($validatedData);
        return redirect()->back()->with('success', 'Publisher added successfully.');
    }

    public function destroy(Publisher $publisher)
    {
        Publisher::destroy($publisher->id);
        return redirect('tambah-penerbit')->with('success', 'Publisher has been deleted!');
    }
}
