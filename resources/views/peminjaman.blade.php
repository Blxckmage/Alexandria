@extends('layouts.main')

@section('main')
    <div class="u-content container">
        <div class="u-body">
            <h1 class="text-primary">Peminjaman</h1>
            <form method="post" action="/peminjaman/search">
                @csrf
                <div class="form-group">
                    <label for="query">Cari Buku</label>
                    <input type="text" class="form-control" name="query" />
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
                @if (isset($books))
                    <a href="{{ url('/peminjaman') }}" class="btn btn-secondary ml-2">Clear</a>
                @endif
            </form>

            @if (isset($books))
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
                                            <td><a href="/peminjaman/borrow/{{ $book->id }}"
                                                    class="btn btn-primary">Pinjam</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            @endif
        </div>
    </div>
@endsection
