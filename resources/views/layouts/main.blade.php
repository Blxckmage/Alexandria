<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Ujikom Perpustakaan</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('./assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}" />

    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />

    <!-- Custom Charts -->
    <style>
        .js-doughnut-chart {
            width: 70px !important;
            height: 70px !important;
        }
    </style>
</head>
<!-- End Head -->

<body>
    @include('partials.topbar')

    <main class="u-main" role="main">
        @include('partials.sidebar')

        @yield('main')

        <!-- Footer -->
        <footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted text-muted">
            <p class="h5 mb-2 mb-md-0">
                Lorem ipsum dolor sit amet.
            </p>
        </footer>
        <!-- End Footer -->
        </div>
    </main>

    <!-- Global Vendor -->
    <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="./assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="./assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>

    <!-- Initialization  -->
    <script src="./assets/js/sidebar-nav.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/dashboard-page-scripts.js"></script>
</body>

</html>
