<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminEmployeeController extends Controller
{
    public function index()
    {
        return view('admin.tambah-petugas', [
            'users' => User::all(),
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('nama', 'LIKE', "%$query%")->get();

        return view('admin.tambah-petugas', [
            'users' => $users,
        ]);
    }

    public function update(Request $request, $id)
    {
        User::where('id', $id)->update(['roles' => $request->roles]);

        return redirect()->back()->with('success', 'User role updated successfully!');
    }
}
