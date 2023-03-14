<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    public function index()
    {
        return view('admin.laporan');
    }

    public function print(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $borrows = Borrowing::whereBetween('created_at', [$startDate, $endDate])->get();

        return view('admin.laporan_print', [
            'borrows' => $borrows,
        ]);
    }
}
