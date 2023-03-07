@extends('layouts.main')

@section('main')
    <div class="u-content">
        <div class="u-body">
            <h1 class="text-primary">Borrowing Requests</h1>

            <div class="d-flex justify-content-end mb-4">
                <form action="{{ route('approval.index') }}" method="GET">
                    <select name="status" id="status" class="form-select">
                        <option value="all"{{ $status == 'all' ? ' selected' : '' }}>All</option>
                        <option value="pending"{{ $status == 'pending' ? ' selected' : '' }}>Pending</option>
                        <option value="approved"{{ $status == 'approved' ? ' selected' : '' }}>Approved</option>
                        <option value="rejected"{{ $status == 'rejected' ? ' selected' : '' }}>Rejected</option>
                    </select>
                    <button type="submit" class="btn btn-primary ms-3">Filter</button>
                </form>
            </div>

            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <table class="table align-items-center justify-content-center table-flush table-hover"
                        id="dataTableHover" style="font-size:.7rem">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Book</th>
                                <th>Borrowing Date</th>
                                <th>Return Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($borrowingRequests as $borrowingRequest)
                                <tr>
                                    <td>{{ $borrowingRequest->id }}</td>
                                    <td>{{ $borrowingRequest->user->peminjam_nama }}</td>
                                    <td>{{ $borrowingRequest->book->buku_judul }}</td>
                                    <td>{{ $borrowingRequest->borrowing_date }}</td>
                                    <td>{{ $borrowingRequest->return_date }}</td>
                                    <td>{{ $borrowingRequest->status }}</td>
                                    <td>
                                        @if ($borrowingRequest->status == 'pending')
                                            <form action="/approval/approve/{{ $borrowingRequest->id }}" method="POST"
                                                style="display: inline">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Approve</button>
                                            </form>
                                            <form action="/approval/reject/{{ $borrowingRequest->id }}" method="POST"
                                                style="display: inline">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Reject</button>
                                            </form>
                                        @endif
                                        @if ($borrowingRequest->status == 'approved' || $borrowingRequest->status == 'rejected')
                                            <button type="button" class="btn btn-secondary" disabled>Approve</button>
                                            <button type="button" class="btn btn-secondary" disabled>Reject</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
