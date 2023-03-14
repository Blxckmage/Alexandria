@extends('layouts.main')

@section('main')

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert"
            style="position: fixed; top: 60px; right: 20px; z-index: 9999;">
            <i class="fa fa-minus-circle alert-icon mr-3"></i>
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
            <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert"
            style="position: fixed; top: 60px; right: 20px; z-index: 9999;">
            <i class="fa fa-check-circle alert-icon mr-3"></i>
            <span> {{ session('status') }}</span>
            <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert"
            style="position: fixed; top: 60px; right: 20px; z-index: 9999;">
            <i class="fa fa-check-circle alert-icon mr-3"></i>
            <span> {{ session('success') }}</span>
            <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="u-content">
        <div class="u-body">
            <h1 class="text-primary">Profile</h1>
            <div class="mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent small p-0">
                        <li class="breadcrumb-item"><a href="/"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Back</a></li>
                    </ol>
                </nav>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $user->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $user->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>No. Telp</th>
                                    <td>{{ $user->telp }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title text-primary">Borrowing Status</h2>
                    <div class="table-responsive">
                        <table class="table align-items-center justify-content-center table-flush table-hover"
                            id="dataTableHover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Book Title</th>
                                    <th>Borrow Date</th>
                                    <th>Return Date</th>
                                    <th>Fine Amount</th>
                                    <th>Return Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($borrowings as $borrowing)
                                    <tr>
                                        <td>{{ $borrowing->id }}</td>
                                        <td>{{ $borrowing->book->buku_judul }}</td>
                                        <td>{{ $borrowing->peminjaman_tgl }}</td>
                                        <td>{{ $borrowing->peminjaman_tgl_hrs_kembali }}</td>
                                        <td>Rp. {{ number_format($borrowing->detail_denda, 0, ',', '.') }}</td>
                                        <td>{{ $borrowing->detail_status_kembali ? 'Kembali' : 'Belum Kembali' }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <form action="/" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-info mx-2"
                                                        {{ $borrowing->detail_denda > 0 ? 'disabled' : '' }}>Return
                                                        Book</button>
                                                </form>
                                                <form action="/account/pay/{{ $borrowing->id }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning mx-2">Pay Fine</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div @endsection
