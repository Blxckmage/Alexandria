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
            <form method="POST" action="/tambah-penerbit">
                @csrf
                <h1 class="text-primary">Tambah Penerbit</h1>
                <div class="form-group">
                    <label for="penerbit_nama">Nama Penerbit</label>
                    <input type="text" class="form-control" id="penerbit_nama" name="penerbit_nama" required>
                </div>
                <div class="form-group">
                    <label for="penerbit_alamat">Alamat Penerbit</label>
                    <input type="text" class="form-control" id="penerbit_alamat" name="penerbit_alamat" required>
                </div>
                <div class="form-group">
                    <label for="penerbit_telp">No. Telp Penerbit</label>
                    <input type="number" class="form-control" id="penerbit_telp" name="penerbit_telp" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
            <hr class="my-4">
            <div>
                <h1 class="text-primary">Daftar Penerbit</h1>
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <table class="table align-items-center justify-content-center table-flush table-hover"
                            id="dataTableHover" style="font-size:.7rem">

                            <div class="form-group">
                                <label>Show</label>
                                <select id="entries-select" class="form-select form-control">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="-1">All</option>
                                </select>
                            </div>

                            <thead>
                                <tr>
                                    <th scope="col">Kode Penerbit</th>
                                    <th scope="col">Nama Penerbit</th>
                                    <th scope="col">Alamat Penerbit</th>
                                    <th scope="col">No. Telp Penerbit</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($publishers as $publisher)
                                    <tr>
                                        <td>{{ $publisher->id }}</td>
                                        <td>{{ $publisher->penerbit_nama }}</td>
                                        <td>{{ $publisher->penerbit_alamat }}</td>
                                        <td>{{ $publisher->penerbit_telp }}</td>
                                        <td>
                                            <form method="post" action="/tambah-penerbit/{{ $publisher->id }}"
                                                style="display:inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('are you sure?')"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                            <form method="get" action="/tambah-penerbit/edit/{{ $publisher->id }}"
                                                style="display:inline">
                                                @csrf
                                                <button type="submit" class="btn btn-info btn-sm"><i
                                                        class="fas fa-edit"></i></button>
                                            </form>
                                        </td>
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
