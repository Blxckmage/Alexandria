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
            <form method="post" action='/tambah-buku'>
                @csrf
                <h1 class="text-primary">Tambah Buku</h1>
                <div class="form-group">
                    <label for="buku_judul">Judul Buku</label>
                    <input type="text" class="form-control" name="buku_judul" id="buku_judul" required>
                </div>
                <div class="form-group">
                    <label for="kategori_kode">Kategori: </label>
                    <select name="kategori_kode" class="custom-select mb-3" id="kategori">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->kategori_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="penerbit_kode">Penerbit: </label>
                    <select name="penerbit_kode" class="custom-select" id="penerbit">
                        @foreach ($publishers as $publisher)
                            <option value="{{ $publisher->id }}">{{ $publisher->penerbit_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku_jumhal">Jumlah Halaman</label>
                    <input type="number" class="form-control" name="buku_jumhal" id="buku_jumhal" required>
                </div>
                <div class="form-group">
                    <label for="buku_deskripsi">Deskripsi Buku</label>
                    <textarea class="form-control" name="buku_deskripsi" id="buku_deskripsi" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="buku_pengarang">Pengarang Buku</label>
                    <input type="text" class="form-control" name="buku_pengarang" id="buku_pengarang" required>
                </div>
                <div class="form-group">
                    <label for="buku_tahun_terbit">Tahun Terbit</label>
                    <input type="number" class="form-control" name="buku_tahun_terbit" id="buku_tahun_terbit" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Book</button>
            </form>
            <hr class="my-4">
            <div>
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
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Pengarang</th>
                                    <th scope="col">Tahun Terbit</th>
                                    <th scope="col">Jumlah Halaman</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->id }}</td>
                                        <td>{{ $book->buku_judul }}</td>
                                        <td>{{ $book->category->kategori_nama }}</td>
                                        <td>{{ $book->publisher->penerbit_nama }}</td>
                                        <td>{{ $book->buku_pengarang }}</td>
                                        <td>{{ $book->buku_tahun_terbit }}</td>
                                        <td>{{ $book->buku_jumhal }}</td>
                                        <td>{{ $book->buku_deskripsi }}</td>
                                        <td>
                                            <form method="post" action="/tambah-buku/{{ $book->id }}"
                                                style="display:inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- </div> --}}
            </div>
        </div>

    </div>
@endsection
