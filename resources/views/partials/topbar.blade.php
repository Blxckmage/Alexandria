<header class="u-header">
    <div class="u-header-left">
        <a class="u-header-logo" href="/">
            <h1><b><i class='m-2 fas fa-book-open'></i>Alexandria</b></h1>
        </a>
    </div>

    <div class="u-header-middle">
        <a class="js-sidebar-invoker u-sidebar-invoker" href="#!" data-is-close-all-except-this="true"
            data-target="#sidebar">
            <i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
            <i class="fa fa-times u-sidebar-invoker__icon--close"></i>
        </a>

    </div>

    <div class="u-header-right">
        @auth
            <!-- User Profile -->
            <div class="dropdown ml-2">
                <a class="link-muted d-flex align-items-center" href="#!" role="button" id="dropdownMenuLink"
                    aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <img class="u-avatar--xs img-fluid rounded-circle mr-2" src="{{ asset('assets/img/avatars/img1.jpg') }}"
                        alt="User Profile" />
                    <span class="text-dark d-none d-sm-inline-block">
                        {{ auth()->user()->nama }}
                        <small class="fa fa-angle-down text-muted ml-1"></small>
                    </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink"
                    style="width: 260px">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-4">
                                    <a class="d-flex align-items-center link-dark" href="/account/{{ Auth::user()->nama }}">
                                        <span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-3"></i></span> View
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex align-items-center link-dark" href="/logout">
                                        <span class="h3 mb-0"><i class="far fa-share-square text-muted mr-3"></i></span>
                                        Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End User Profile -->
        @else
            <h3>
                <a href="/login">Login</a>
            </h3>
        @endauth
    </div>
</header>
