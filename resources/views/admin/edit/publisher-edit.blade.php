@extends('layouts.main')

@section('main')
    <div class="u-content">
        <div class="u-body">
            <div class="card mx-auto mb-4">
                <div class="card-header">
                    Edit Book
                </div>
                <div class="card-body">
                    <form method="post" action="/tambah-penerbit/edit/{{ $publisher->id }}">
                        @csrf
                        @method('PATCH')
                        <div class="table-responsive p-3">
                            <table class="table align-items-center justify-content-center table-flush table-hover"
                                id="dataTableHover" style="font-size:.7rem">
                                <td>ID</td>
                                <td>{{ $publisher->id }}</td>
                                </tr>
                                <tr>
                                    <td>Publisher Name</td>
                                    <td><input type="text" class="form-control" name="penerbit_nama"
                                            value="{{ $publisher->penerbit_nama }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Publisher's Address</td>
                                    <td><input type="text" class="form-control" name="penerbit_alamat"
                                            value="{{ $publisher->penerbit_alamat }}"></td>
                                </tr>
                                <tr>
                                    <td>Year Published</td>
                                    <td><input type="number" class="form-control" name="penerbit_telp"
                                            value="{{ $publisher->penerbit_telp }}"></td>
                                </tr>
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
