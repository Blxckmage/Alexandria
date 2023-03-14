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
        .modal-body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
    </style>
</head>
<!-- End Head -->

<body>
    @include('partials.topbar')

    <main class="u-main" role="main">
        @if (isset($books))
            @foreach ($books as $book)
                <div class="modal fade" id="borrow-{{ $book->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="borrow-modal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">
                                    Borrow Book</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=400x400&data={{ URL::to('/borrowing/borrow/' . $book->id) }}"
                                    alt="QR code">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        @include('partials.sidebar')

        @yield('main')

        <!-- Footer -->
        <footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted text-muted">
            <p class="h5 mb-2 mb-md-0">
                Perpustakaan
            </p>
        </footer>
        <!-- End Footer -->
        </div>
    </main>

    <!-- Global Vendor -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>

    <!-- Initialization  -->
    <script src="{{ asset('assets/js/sidebar-nav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-page-scripts.js') }}"></script>
</body>

</html>
