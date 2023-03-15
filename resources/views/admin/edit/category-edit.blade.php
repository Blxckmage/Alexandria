@extends('layouts.main')

@section('main')
    <div class="u-content">
        <div class="u-body">
            <div class="card mx-auto mb-4">
                <div class="card-header">
                    Edit Category
                </div>
                <div class="card-body">
                    <form method="post" action="/tambah-kategori/edit/{{ $category->id }}">
                        @csrf
                        @method('PATCH')
                        <div class="table-responsive p-3">
                            <table class="table align-items-center justify-content-center table-flush table-hover"
                                id="dataTableHover" style="font-size:.7rem">
                                <td>ID</td>
                                <td>{{ $category->id }}</td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td><input type="text" class="form-control" name="kategori_nama"
                                            value="{{ $category->kategori_nama }}">
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
