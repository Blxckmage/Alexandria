<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Perpustakaan | Sign In</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="./assets/vendor/font-awesome/css/all.min.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="./assets/css/theme.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}" />
</head>
<!-- End Head -->

<body>
    <main class="container-fluid w-100" role="main">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
                <a class="u-login-form py-3 mb-auto" href="/login">
                    <h1 class="text-primary"><b><i class="m-2 fas fa-book-open"></i>Alexandria</b></h1>
                </a>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa fa-check-circle alert-icon mr-3"></i>
                        <span>{{ session('success') }}</span>
                        <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-check-circle alert-icon mr-3"></i>
                        <span>{{ session('loginError') }}</span>
                        <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="u-login-form">
                    <form class="mb-3" action="/login" method="post">
                        @csrf
                        <div class="mb-3">
                            <h1 class="h2">Welcome!</h1>
                        </div>

                        <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input id="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" type="email" placeholder="albert.camus@example.com" autofocus required
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" name="password" type="password"
                                placeholder="Your password" required>
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </form>

                    <p class="small">
                        Don’t have an account? <a href="/register">Sign Up here</a>
                    </p>
                </div>

                <div class="u-login-form text-muted py-3 mt-auto">
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center bg-light">
                <img class="img-fluid position-relative u-z-index-3 mx-5" src="./assets/svg/shapes/bookshelves.svg"
                    alt="Bookshelves">


                <figure class="u-shape u-shape--top-right u-shape--position-5">
                    <img src="./assets/svg/shapes/shape-1.svg" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--center-left u-shape--position-6">
                    <img src="./assets/svg/shapes/shape-2.svg" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--center-right u-shape--position-7">
                    <img src="./assets/svg/shapes/shape-3.svg" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--bottom-left u-shape--position-8">
                    <img src="./assets/svg/shapes/shape-4.svg" alt="Image description">
                </figure>
            </div>
        </div>
    </main>
</body>

<!-- Global Vendor -->
<script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="./assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="./assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="./assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Initialization  -->
<script src="./assets/js/sidebar-nav.js"></script>
<script src="./assets/js/main.js"></script>

</html>
