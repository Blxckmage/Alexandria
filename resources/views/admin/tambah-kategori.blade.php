@extends('layouts.main')

@section('main')
    <div class="u-content container">
        <div class="u-body">
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
                <form method="post" action='/tambah-kategori'>
                    @csrf
                    <h1 class="text-primary">Tambah Kategori</h1>
                    <div class="form-group">
                        <label for="kategori_nama">Nama Kategori</label>
                        <input type="text" class="form-control" name="kategori_nama" id="kategori_nama" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </form>
                <hr class="my-4">
                <div>
                    <h1 class="text-primary">Daftar Kategori</h1>
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
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->kategori_nama }}</td>
                                            <td>
                                                <form method="post" action="/tambah-kategori/{{ $category->id }}"
                                                    style="display:inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('are you sure?')"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>

                                                <form method="get" action="/tambah-kategori/edit/{{ $category->id }}"
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

                </div>
            </div>
        </div>
    @endsection
