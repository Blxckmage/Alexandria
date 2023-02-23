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
                                <span class="h2 mb-0">3</span>
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
                                <span class="h2 mb-0">2</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Jumlah Pengarang
                                </h5>
                                <span class="h2 mb-0">3</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Jumlah Penerbit
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
                                    <th scope="col">Judul Buku</th>
                                    <th scope="col">Jumlah Halaman</th>
                                    <th scope="col">Pengarang Buku</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Tahun Terbit</th>
                                    <th scope="col">Nama Penerbit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>1</td>
                                <td>Crime And Punishment</td>
                                <td>129</td>
                                <td>Dostoyevsky</td>
                                <td>Psychological Fiction</td>
                                <td>1866</td>
                                <td>Penguin Classics</td>
                            </tbody>
                            <tbody>
                                <td>2</td>
                                <td>The Myth Of Sisyphus</td>
                                <td>210</td>
                                <td>Albert Camus</td>
                                <td>Philosophy</td>
                                <td>1942</td>
                                <td>Persephone Books</td>
                            </tbody>
                            <tbody>
                                <td>3</td>
                                <td>The Metamorphosis</td>
                                <td>323</td>
                                <td>Franz Kafka</td>
                                <td>Philosophy</td>
                                <td>1915</td>
                                <td>Renard Press</td>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    @endsection
