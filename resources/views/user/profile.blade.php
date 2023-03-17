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
            <h1 class='text-primary'>Profile {{ $user->nama }}</h1>
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
                                <tr>
                                    <th>Jumlah Buku Yang Belum Dikembalikan</th>
                                    <td>{{ $user->borrowing->where('detail_status_kembali', 0)->count() }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
