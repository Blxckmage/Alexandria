@extends('layouts.main')

@section('main')
    <div class="u-content">
        <div class="u-body">
            <h1 class="text-primary">Homepage</h1>
            <div class="row">
                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Jumlah Buku
                                </h5>
                                <span class="h2 mb-0">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Kategori
                                </h5>
                                <span class="h2 mb-0">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Anggota
                                </h5>
                                <span class="h2 mb-0">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Riwayat Peminjaman
                                </h5>
                                <span class="h2 mb-0">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-auto">
                <h1 class="text-primary">Riwayat Peminjaman</h1>
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <table class="table align-items-center justify-content-center table-flush table-hover"
                            id="dataTableHover" style="font-size:.7rem">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Kode Peminjaman</th>
                                    <th scope="col">Kode Buku</th>
                                    <th scope="col">Tanggal Pinjam</th>
                                    <th scope="col">Tanggal Pengembalian</th>
                                    <th scope="col">Denda</th>
                                    <th scope="col">Status Kembali</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>1</td>
                                <td>87781</td>
                                <td>54324</td>
                                <td>2022-02-22</td>
                                <td>2022-05-22</td>
                                <td>10000</td>
                                <td>False</td>
                            </tbody>
                            <tbody>
                                <td>1</td>
                                <td>87781</td>
                                <td>54324</td>
                                <td>2022-02-22</td>
                                <td>2022-05-22</td>
                                <td>10000</td>
                                <td>False</td>
                            </tbody>
                            <tbody>
                                <td>1</td>
                                <td>87781</td>
                                <td>54324</td>
                                <td>2022-02-22</td>
                                <td>2022-05-22</td>
                                <td>10000</td>
                                <td>False</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
