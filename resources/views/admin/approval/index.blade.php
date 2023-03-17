@extends('layouts.main')

@section('main')
    <div class="u-content container">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert"
                style="position: fixed; top: 60px; right: 20px; z-index: 9999;">
                <i class="fa fa-minus-circle alert-icon mr-3"></i>
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
                <button type="button" class="close" aria-label="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert"
                style="position: fixed; top: 60px; right: 20px; z-index: 9999;">
                <i class="fa fa-check-circle alert-icon mr-3"></i>
                <span> {{ session('status') }}</span>
                <button type="button" class="close" aria-label="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert"
                style="position: fixed; top: 60px; right: 20px; z-index: 9999;">
                <i class="fa fa-check-circle alert-icon mr-3"></i>
                <span> {{ session('success') }}</span>
                <button type="button" class="close" aria-label="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="u-body">
            <h1 class="text-primary">Request Approval</h1>

            <div class="d-flex justify-content-end mb-4">
                <form action="{{ route('approval.index') }}" method="get">
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
                        id="datatablehover" style="font-size:.7rem">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Book</th>
                                <th>Borrowing Date</th>
                                <th>Return Date</th>
                                <th>Status</th>
                                <th>Unreturned Book</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($borrowingRequests as $borrowingRequest)
                                <tr @if ($borrowingRequest->user->borrowing->where('detail_status_kembali', 0)->count() >= 3) class="table-danger" @endif>
                                    <td>{{ $borrowingRequest->id }}</td>
                                    <td><a
                                            href="/account/profile/{{ $borrowingRequest->user->id }}">{{ $borrowingRequest->user->nama }}</a>
                                    </td>
                                    <td>{{ $borrowingRequest->book->buku_judul }}</td>
                                    <td>{{ $borrowingRequest->borrowing_date }}</td>
                                    <td>{{ $borrowingRequest->return_date }}</td>
                                    <td>{{ $borrowingRequest->status }}</td>
                                    <td>{{ $borrowingRequest->user->borrowing->where('detail_status_kembali', 0)->count() }}
                                        Book(s)</td>
                                    <td>
                                        @if ($borrowingRequest->status == 'pending')
                                            <form action="/approval/approve/{{ $borrowingRequest->id }}" method="post"
                                                style="display: inline">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="hidden" id="borrowing_date" name="borrowing_date"
                                                        value="{{ $borrowingRequest->borrowing_date }}" hidden>
                                                </div>

                                                <div class="form-group">
                                                    <input type="hidden" id="return_date" name="return_date"
                                                        value="{{ $borrowingRequest->return_date }}" hidden>
                                                </div>
                                                <button type="submit" class="btn btn-success">Approve</button>
                                            </form>
                                            <form action="/approval/reject/{{ $borrowingRequest->id }}" method="post"
                                                style="display: inline">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Reject</button>
                                            </form>
                                        @else
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
