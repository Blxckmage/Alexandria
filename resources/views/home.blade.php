@extends('layouts.main')

@section('main')
    <div class="u-body container py-5">
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

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center text-primary mb-5"><b>Welcome To <mark>Alexandria Library</mark></b></h1>
                <div class="text-center mb-5">
                    <img src="assets/svg/shapes/booklover.svg" class="img-fluid" alt="book stack"
                        style="max-width: 300px; height: auto;">
                </div>
                <div class="text-center">
                    <blockquote class="blockquote">
                        <p class="mb-0">The man who does not read good books has no advantage over the man who can't read
                            them</p>
                        <footer class="blockquote-footer">Mark Twain, <cite title="Source Title">1895 A.D</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card h-100">
                <header class="card-header d-flex align-items-center">
                    <h2 class="h3 card-header-title">Newly Released Books</h2>
                </header>

                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-active text-muted">
                                <tr class="small text-muted text-uppercase">
                                    <th>Book Name</th>
                                    <th>Book Author</th>
                                    <th>Book Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td class="align-middle">
                                            <div class="media align-items-center">
                                                <div class="u-icon u-icon--sm bg-primary text-white rounded-circle mr-3">
                                                    <i class="fas fa-book"></i>
                                                </div>

                                                <div class="media-body">
                                                    <h4 class="mb-0">{{ $book->buku_judul }}</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle font-weight-semibold">
                                            {{ $book->buku_pengarang }}
                                        </td>
                                        <td class="align-middle font-weight-semibold">
                                            {{ $book->category->kategori_nama }}
                                        </td>
                                        <td class="align-middle">
                                            <a href="/books/{{ $book->id }}" class="btn btn-primary btn-sm">Details</a>
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
