@extends('layouts.main')

@section('main')
    <div class="u-content container">
        <div class="u-body">
            <h1 class="mb-4 text-primary">Borrow Detail</h1>
            <div class="row ">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">Book Information</h2>
                            <hr />
                            <p class="card-text"><strong>Title:</strong> {{ $book->buku_judul }}</p>
                            <p class="card-text"><strong>Author:</strong> {{ $book->buku_pengarang }}</p>
                            <p class="card-text"><strong>Publisher:</strong> {{ $book->publisher->penerbit_nama }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Borrow Information</h2>
                            <hr />
                            <form action="/borrowing/borrow" method="POST">
                                @csrf
                                <input type="hidden" name="book_id" value="{{ $book->id }}">
                                <div class="form-group">
                                    <label for="user_id">User ID</label>
                                    <input type="text" class="form-control" id="user_id" name="user_id"
                                        value="{{ Auth::user()->id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Peminjam</label>
                                    <input type="text" class="form-control" id="peminjam_kode"
                                        value="{{ Auth::user()->nama }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="borrowing_date">Tanggal Pinjam</label>
                                    <input type="date" class="form-control" id="borrowing_date" name="borrowing_date"
                                        value="{{ date('Y-m-d') }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="return_date">Batas Pengembalian</label>
                                    <input type="date" class="form-control" id="return_date" name="return_date"
                                        value="{{ date('Y-m-d', strtotime('+7 day')) }}" readonly>
                                </div>
                                <button type="submit" class="btn btn-primary">Borrow</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
