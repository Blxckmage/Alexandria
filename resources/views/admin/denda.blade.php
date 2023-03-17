@extends('layouts.main')

@section('main')
    <div class="u-content container">
        <div class="u-body">

            <div class="card mb-4">
                <div class="card-body">
                    <h1 class="text-primary">Borrowing History</h1>
                    <div class="table-responsive">
                        <table class="table align-items-center justify-content-center table-flush table-hover"
                            id="dataTableHover" style="font-size:.7rem">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Book Title</th>
                                    <th>Borrower Name</th>
                                    <th>Borrow Date</th>
                                    <th>Due Date</th>
                                    <th>Fine Amount</th>
                                    <th>Unreturned Book(s)</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($borrowings as $borrowing)
                                    <tr>
                                        <td>{{ $borrowing->id }}</td>
                                        <td>{{ $borrowing->book->buku_judul }}</td>
                                        <td><a
                                                href="/account/profile/{{ $borrowing->user->id }}">{{ $borrowing->user->nama }}</a>
                                        </td>
                                        <td>{{ $borrowing->peminjaman_tgl }}</td>
                                        <td>{{ $borrowing->peminjaman_tgl_hrs_kembali }}</td>
                                        <td>Rp. {{ number_format($borrowing->detail_denda, 0, ',', '.') }}</td>
                                        </td>
                                        <td>{{ $borrowing->detail_status_kembali ? 'Kembali' : 'Belum Kembali' }}</td>
                                        <td>
                                            <form method="POST" action="/ubah-denda/{{ $borrowing->id }}">
                                                @csrf
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Rp. </div>
                                                    </div>
                                                    <input type="number" class="form-control" name="denda"
                                                        value="{{ $borrowing->detail_denda }}">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
