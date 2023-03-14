@extends('layouts.main')

@section('main')
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
                    <h2 class="card-title text-primary">Borrowing History</h2>
                    <div class="table-responsive">
                        <table class="table align-items-center justify-content-center table-flush table-hover"
                            id="dataTableHover" style="font-size:.7rem">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Book Title</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Denda</th>
                                    <th>Return Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($borrowDetails as $borrow)
                                    <tr>
                                        <td>{{ $borrow->peminjaman_kode }}</td>
                                        <td>{{ $borrow->book->title }}</td>
                                        <td>{{ $borrow->tanggal_kembali }}</td>
                                        <td>{{ $borrow->denda }}</td>
                                        <td>{{ $borrow->return_status }}</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Kembalikan</button>
                                            <button type="button" class="btn btn-primary">Bayar Denda</button>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
