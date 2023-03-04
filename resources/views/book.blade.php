@extends('layouts.main')

@section('main')
    <div class="u-content">
        <div class="u-body">
            <h1 class="h2 font-weight-semibold mb-4">{{ $book->buku_judul }}</h1>
            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent small p-0">
                        <li class="breadcrumb-item"><a href="/books">Books</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Book Details</li>
                    </ol>
                </nav>
            </div>

            <div class="card mb-4">
                <header class="card-header">
                    <h2 class="h3 card-header-title">Detail</h2>
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>Judul Buku</th>
                                    <td>{{ $book->buku_judul }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi Buku</th>
                                    <td>{{ $book->buku_deskripsi }}</td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td class="badge badge-soft-primary">{{ $book->category->kategori_nama }}</td>
                                </tr>
                                <tr>
                                    <th>Pengarang</th>
                                    <td>{{ $book->buku_pengarang }}</td>
                                </tr>
                                <tr>
                                    <th>Penerbit</th>
                                    <td>{{ $book->publisher->penerbit_nama }}</td>
                                </tr>
                                <tr>
                                    <th>Jumlah Halaman</th>
                                    <td>{{ $book->buku_jumhal }}</td>
                                </tr>
                                <tr>
                                    <th>Tahun Terbit</th>
                                    <td>{{ $book->buku_tahun_terbit }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
