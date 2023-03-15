@extends('layouts.main')

@section('main')
    <div class="u-content">
        <div class="u-body">
            <div class="card mx-auto mb-4">
                <div class="card-header">
                    Edit Book
                </div>
                <div class="card-body">
                    <form method="post" action="/tambah-buku/edit/{{ $book->id }}">
                        @csrf
                        @method('PATCH')
                        <div class="table-responsive p-3">
                            <table class="table align-items-center justify-content-center table-flush table-hover"
                                id="dataTableHover" style="font-size:.7rem">
                                <td>ID</td>
                                <td>{{ $book->id }}</td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td><input type="text" class="form-control" name="buku_judul"
                                            value="{{ $book->buku_judul }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>
                                        <select name="kategori_id" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $book->kategori_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->kategori_nama }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Publisher</td>
                                    <td>
                                        <select name="penerbit_id" class="form-control">
                                            @foreach ($publishers as $publisher)
                                                <option value="{{ $publisher->id }}"
                                                    {{ $book->penerbit_id == $publisher->id ? 'selected' : '' }}>
                                                    {{ $publisher->penerbit_nama }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Author</td>
                                    <td><input type="text" class="form-control" name="buku_pengarang"
                                            value="{{ $book->buku_pengarang }}"></td>
                                </tr>
                                <tr>
                                    <td>Year Published</td>
                                    <td><input type="number" class="form-control" name="buku_tahun_terbit"
                                            value="{{ $book->buku_tahun_terbit }}"></td>
                                </tr>
                                <tr>
                                    <td>Number of Pages</td>
                                    <td><input type="number" class="form-control" name="buku_jumhal"
                                            value="{{ $book->buku_jumhal }}"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>
                                        <textarea class="form-control" name="buku_deskripsi" id="buku_deskripsi" rows="3">{{ $book->buku_deskripsi }}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button type="submit" class="btn btn-primary">Update Book</button></td>
                                </tr>
                            </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
