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
        <div class="u-body">



            <h1 class="text-primary">Peminjaman</h1>
            <form method="post" action="/borrowing/search">
                @csrf
                <div class="form-group">
                    <label for="query">Cari Buku</label>
                    <input type="text" class="form-control" name="query" required />
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
                @if (isset($books))
                    <a href="{{ url('/borrowing') }}" class="btn btn-secondary ml-2">Clear</a>
                @endif
            </form>

            @if (isset($books))
                @if (count($books) > 0)
                    <div>
                        <h2 class="mt-5">Hasil Pencarian</h2>
                        <div class="card mb-4">
                            <div class="table-responsive p-3">
                                <table class="table align-items-center justify-content-center table-flush table-hover"
                                    id="dataTableHover" style="font-size:.7rem">
                                    <thead>
                                        <tr>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Pengarang</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Penerbit</th>
                                            <th scope="col">Tahun Terbit</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                            <tr>
                                                <td>{{ $book->buku_judul }}</td>
                                                <td>{{ $book->buku_pengarang }}</td>
                                                <td>{{ $book->category->kategori_nama }}</td>
                                                <td>{{ $book->publisher->penerbit_nama }}</td>
                                                <td>{{ $book->buku_tahun_terbit }}</td>
                                                {{-- <td><a href="/borrowing/borrow/{{ $book->id }}"
                                                        class="btn btn-primary">Pinjam</a></td> --}}
                                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#borrow-{{ $book->id }}">
                                                        Borrow
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                @else
                    <div class="alert alert-danger mt-5" role="alert">
                        Tidak ditemukan buku yang sesuai dengan kata kunci pencarian Anda.
                    </div>
                @endif
            @endif
        </div>
    </div>
@endsection
