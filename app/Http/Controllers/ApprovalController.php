<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use Illuminate\Http\Request;
use App\Models\BorrowRequest;
use Carbon\Carbon;

class ApprovalController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->input('status', 'all');

        if ($status == 'pending') {
            $borrowingRequests = BorrowRequest::where('status', 'pending')->get();
        } elseif ($status == 'approved') {
            $borrowingRequests = BorrowRequest::where('status', 'approved')->get();
        } elseif ($status == 'rejected') {
            $borrowingRequests = BorrowRequest::where('status', 'rejected')->get();
        } else {
            $borrowingRequests = BorrowRequest::all();
        }

        return view('admin.approval.index', [
            "borrowingRequests" => $borrowingRequests,
            "status" => $status,
        ]);
    }

    public function approve(Request $request, $id)
    {
        $borrowingRequest = BorrowRequest::findOrFail($id);

        $returnDate = Carbon::parse($borrowingRequest->borrowing_date)->addMonth();

        $borrowing = Borrowing::create([
            'petugas_kode' => auth()->user()->id,
            'buku_kode' => $borrowingRequest->book_id,
            'peminjam_kode' => $borrowingRequest->user->id,
            'peminjaman_tgl' => $borrowingRequest->borrowing_date,
            'peminjaman_tgl_hrs_kembali' => $returnDate,
            'detail_denda' => 0,
            'detail_status_kembali' => 0,
        ]);

        $borrowingRequest->update(['status' => 'approved']);

        return redirect('/approval')->with('success', 'Borrowing request approved.');
    }


    public function reject(Request $request, $id)
    {
        $borrowingRequest = BorrowRequest::find($id);

        if (!$borrowingRequest) {
            return redirect('/approval')->with('error', 'Borrowing request not found.');
        }

        $borrowingRequest->update(['status' => 'rejected']);

        return redirect('/approval')->with('success', 'Borrowing request rejected.');
    }
}
