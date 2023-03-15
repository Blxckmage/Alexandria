@extends('layouts.main')

@section('main')
    <div class="u-content">
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
            <h2>Tambah Petugas</h2>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <form method="post" action="/tambah-petugas">
                            @csrf
                            <div class="form-group">
                                <label for="query">Cari User</label>
                                <input type="text" class="form-control" name="query" required />
                            </div>
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </form>
                    </div>
                    <table class="table align-items-center justify-content-center table-flush table-hover"
                        id="dataTableHover" style="font-size:.7rem">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Role</th>
                                <th>Pilih</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <form method="POST" action="/tambah-petugas/update/{{ $user->id }}">
                                    @csrf
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->alamat }}</td>
                                        <td>{{ $user->telp }}</td>
                                        <td>{{ $user->roles }}</td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control" name="roles">
                                                    <option value="employee"
                                                        {{ $user->roles === 'employee' ? 'selected' : '' }}>Petugas
                                                    </option>
                                                    <option value="admin"
                                                        {{ $user->roles === 'admin' ? 'selected' : '' }}>Admin</option>
                                                    <option value="borrower"
                                                        {{ $user->roles === 'borrower' ? 'selected' : '' }}>Borrower
                                                    </option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
