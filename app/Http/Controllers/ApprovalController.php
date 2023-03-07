<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BorrowRequest;

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
        $borrowingRequest = BorrowRequest::find($id);

        if (!$borrowingRequest) {
            return redirect('/approval')->with('error', 'Borrowing request not found.');
        }

        $borrowingRequest->status = 'approved';
        $borrowingRequest->save();

        return redirect('/approval')->with('success', 'Borrowing request approved.');
    }

    public function reject(Request $request, $id)
    {
        $borrowingRequest = BorrowRequest::find($id);

        if (!$borrowingRequest) {
            return redirect('/approval')->with('error', 'Borrowing request not found.');
        }

        $borrowingRequest->status = 'rejected';
        $borrowingRequest->save();

        return redirect('/approval')->with('success', 'Borrowing request rejected.');
    }
}
