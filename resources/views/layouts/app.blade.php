

<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>Tedy Ecommerce</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v4.2.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Css -->
        <link href="{{ asset('assets/app/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/app/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/app/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/app/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="{{ asset('assets/app/css/style.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/app.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />

        @stack('styles')
    </head>

    <body>
        <!-- Navbar Start -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="">
                    Tedy Ecommerce
                </a>
                <!-- End Logo container-->

                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item mb-0 pe-1">
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <i class="uil uil-search text-white title-dark btn-icon-light fs-5 align-middle"></i>
                                <i class="uil uil-search text-dark btn-icon-dark fs-5 align-middle"></i> -->
                                <i class="uil uil-search text-dark fs-5 align-middle"></i>
                            </button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 p-0" style="width: 300px;">
                                <div class="search-bar">
                                    <div id="itemSearch" class="menu-search mb-0">
                                        <form role="search" method="get" id="searchItemform" class="searchform">
                                            <input type="text" class="form-control border rounded" name="s" id="searchItem" placeholder="Search...">
                                            <input type="submit" id="searchItemsubmit" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    @auth
                        <li class="list-inline-item mb-0">
                            <a href="{{ route('cart') }}" class="btn btn-icon btn-pills btn-primary"><i data-feather="shopping-cart" class="icons"></i></a>
                        </li>
                        <li class="list-inline-item mb-0">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-icon btn-pills btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="user" class="icons"></i></button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 py-3" style="width: 200px;">
                                    <a class="dropdown-item text-dark" href="#"><i class="uil uil-user align-middle me-1"></i> Account</a>

                                    <a class="dropdown-item text-dark" href="#"><i class="uil uil-clipboard-notes align-middle me-1"></i> Order History</a>

                                    <div class="dropdown-divider my-3 border-top"></div>

                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <span class="nav-text">{{ __('Logout') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    @else
                        <li class="list-inline-item mb-0">
                            <a href="{{ route('login') }}" class="btn btn-icon btn-pills btn-primary"><i data-feather="log-in" class="icons"></i></a>
                        </li>
                    @endauth
                </ul><!--end login button-->

            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        @yield('content')

        <!-- Footer Start -->
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-py-60">
                            <div class="row">
                                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                    <a href="#" class="logo-footer text-light font-weight-bold">
                                        Tedy Ecommerce
                                    </a>
                                    <p class="mt-4">Buy whatever you need, this is the right place</p>
                                </div><!--end col-->

                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-12 mb-4 pb-2">
                                            <h5 class="footer-head mb-0">Our Product</h5>
                                        </div><!--end col-->

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <ul class="list-unstyled footer-list">
                                                <li><a href="#" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Fashion</a></li>
                                            </ul>
                                        </div><!--end col-->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <ul class="list-unstyled footer-list">
                                                <li><a href="#" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Sport</a></li>
                                            </ul>
                                        </div><!--end col-->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <ul class="list-unstyled footer-list">
                                                <li><a href="#" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Electronic</a></li>
                                            </ul>
                                        </div><!--end col-->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <ul class="list-unstyled footer-list">
                                                <li><a href="#" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Music</a></li>
                                            </ul>
                                        </div><!--end col-->

                                    </div><!--end row-->
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <h5 class="footer-head">Newsletter</h5>
                                    <p class="mt-4">Sign up and receive the latest tips via email.</p>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="foot-subscribe mb-3">
                                                    <label class="form-label">Write your email <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input type="email" name="email" id="emailsubscribe" class="form-control ps-5 rounded" placeholder="Your email : " required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="d-grid">
                                                    <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary" value="Subscribe">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-py-30 footer-border">
                            <div class="container text-center">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <div class="text-sm-start">
                                            <p class="mb-0">© {{date('Y')}} Tedy Ecommerce </a></p>
                                        </div>
                                    </div><!--end col-->

                                </div><!--end row-->
                            </div><!--end container-->
                        </div>
                    </div>
                </div>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        <!-- Javascript -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/app/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/app/libs/feather-icons/feather.min.js') }}"></script>
        <!-- SLIDER -->
        <script src="{{ asset('assets/app/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('assets/app/js/plugins.init.js') }}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{ asset('assets/app/js/app.js') }}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @stack('scripts')
    </body>
</html>
