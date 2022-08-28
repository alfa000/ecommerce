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

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/dashboard/images/favicon.ico') }}" />
        <!-- Css -->
        <link href="{{ asset('assets/dashboard/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/dashboard/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="{{ asset('assets/dashboard/css/style.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    </head>

    <body>

        <div class="page-wrapper toggled">
            <!-- sidebar-wrapper -->
            <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
                <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                    <div class="sidebar-brand">
                        <a href="/dashboard">
                            Tedy Ecommerce
                        </a>
                    </div>

                    <ul class="sidebar-menu">
                        <li><a href="{{route('dashboard')}}"><i class="ti ti-home me-2"></i>Dashboard</a></li>
                        <li><a href="{{route('product.index')}}"><i class="ti ti-package me-2"></i>Product</a></li>
                        <li><a href="{{route('transaction.index')}}"><i class="ti ti-truck me-2"></i>Transaction</a></li>
                    </ul>
                    <!-- sidebar-menu  -->
                </div>
            </nav>
            <!-- sidebar-wrapper  -->

            <!-- Start Page Content -->
            <main class="page-content bg-light">
                <!-- Top Header -->
                <div class="top-header">
                    <div class="header-bar d-flex justify-content-between border-bottom">
                        <div class="d-flex align-items-center">
                            <a href="#" class="logo-icon me-3">
                                Tedy Ecommerce
                            </a>
                            <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </div>

                        <ul class="list-unstyled mb-0">

                            <li class="list-inline-item mb-0 ms-1">
                                <div class="dropdown dropdown-primary">
                                    <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/dashboard/images/client/01.jpg') }}" class="avatar avatar-ex-small rounded" alt=""></button>
                                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                        <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                                            <img src="{{ asset('assets/dashboard/images/client/01.jpg') }}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="flex-1 ms-2">
                                                <span class="d-block">{{Auth::user()->name}}</span>
                                                <small class="text-muted">{{Auth::user()->role}}</small>
                                            </div>
                                        </a>
                                        <a class="dropdown-item text-dark" href="{{ route('dashboard') }}"><span class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span> Dashboard</a>
                                        <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span> Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Top Header -->

                @yield('content')

                <!-- Footer Start -->
                <footer class="shadow py-3">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-sm-start text-center mx-md-2">
                                    <p class="mb-0 text-muted">© {{ date('Y') }} Tedy Ecommerce</a>.</p>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </footer><!--end footer-->
                <!-- End -->
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="{{ asset('assets/dashboard/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/libs/apexcharts/apexcharts.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('assets/dashboard/js/plugins.init.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('assets/app.js') }}"></script>

        @stack('push')
    </body>

</html>
