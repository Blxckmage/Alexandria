@extends('layouts.main')

@section('main')
    <div class="u-content">
        <div class="u-body">
            <h1 class="text-primary">Books</h1>
            <div class="row">
                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Jumlah Buku
                                </h5>
                                <span class="h2 mb-0">
                                    {{ $books->count() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Jumlah Kategori
                                </h5>
                                <span class="h2 mb-0">
                                    {{ $categories->count() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <h1 class="text-primary">Daftar Buku</h1>
                    <div class="card mb-4">
                        <div class="table-responsive p-3">
                            <table class="table align-items-center justify-content-center table-flush table-hover"
                                id="dataTableHover" style="font-size:.7rem">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Judul Buku</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Pengarang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ $book->id }}</td>
                                            <td>{{ $book->buku_judul }}</td>
                                            <td>{{ $book->category->kategori_nama }}</td>
                                            <td>{{ $book->buku_pengarang }}</td>
                                            <td><a href="/books/{{ $book->id }}"
                                                    class="btn btn-primary btn-sm">Details</a>
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
