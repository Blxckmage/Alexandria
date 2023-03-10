<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Perpustakaan | Register</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="./assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

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
                <a class="u-login-form py-3 mb-auto" href="index.html">
                    <h1 class="text-primary"><b><i class="m-2 fas fa-book-open"></i>Alexandria</b></h1>
                </a>

                <div class="u-login-form">
                    <form class="mb-3" action="/register" method="POST">
                        @csrf
                        <div class="mb-3">
                            <h1 class="h2">Create Your Account</h1>
                            <p class="small">Login to your dashboard with your registered email address and password.
                            </p>
                        </div>

                        <div class="form-group mb-4">
                            <label for="nama">Your Name</label>
                            <input id="nama" class="form-control rounded-top @error('nama') is-invalid @enderror"
                                name="nama" type="text" placeholder="John Doe" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="email">Your Email</label>
                            <input id="email" class="form-control rounded-top @error('email') is-invalid @enderror"
                                name="email" type="email" placeholder="john.doe@example.com" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password">password</label>
                            <input id="password"
                                class="form-control rounded-top @error('password') is-invalid @enderror" name="password"
                                type="password" placeholder="enter your password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="alamat">your address</label>
                            <input id="alamat" class="form-control rounded-top @error('alamat') is-invalid @enderror"
                                name="alamat" type="text" placeholder="enter your address" required>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="telp">your phone number</label>
                            <input id="telp" class="form-control rounded-top @error('telp') is-invalid @enderror"
                                name="telp" type="text" placeholder="enter your phone number" required>
                            @error('telp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                    </form>

                    <p class="small">
                        Already have an account? <a href="/login">Login here</a>
                    </p>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center bg-light">
                <img class="img-fluid position-relative u-z-index-3 mx-5" src="./assets/svg/shapes/bookshelves.svg"
                    alt="bookshelves">

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
