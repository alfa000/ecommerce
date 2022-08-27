@extends('layouts.admin')
@section('content')
<main class="page-content bg-light">
    <!-- Top Header -->
    <div class="top-header">
        <div class="header-bar d-flex justify-content-between border-bottom">
            <div class="d-flex align-items-center">
                <a href="#" class="logo-icon me-3">
                    <img src="{{ asset('assets/dashboard/images/logo-icon.png') }}" height="30" class="small" alt="">
                    <span class="big">
                        <img src="{{ asset('assets/dashboard/images/logo-dark.png') }}" height="24" class="logo-light-mode" alt="">
                        <img src="{{ asset('assets/dashboard/images/logo-light.png') }}" height="24" class="logo-dark-mode" alt="">
                    </span>
                </a>
                <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </div>

            <ul class="list-unstyled mb-0">

                <li class="list-inline-item mb-0 ms-1">
                    <div class="dropdown dropdown-primary">
                        <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/dashboard/images/client/05.jpg') }}" class="avatar avatar-ex-small rounded" alt=""></button>
                        <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                            <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                                <img src="{{ asset('assets/dashboard/images/client/05.jpg') }}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                <div class="flex-1 ms-2">
                                    <span class="d-block">Cristina Julia</span>
                                    <small class="text-muted">UI / UX Designer</small>
                                </div>
                            </a>
                            <a class="dropdown-item text-dark" href="index.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span> Dashboard</a>
                            <a class="dropdown-item text-dark" href="profile.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Profile</a>
                            <a class="dropdown-item text-dark" href="email.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span> Email</a>
                            <div class="dropdown-divider border-top"></div>
                            <a class="dropdown-item text-dark" href="lock-screen.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-lock"></i></span> Lockscreen</a>
                            <a class="dropdown-item text-dark" href="login.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span> Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Top Header -->

    <div class="container-fluid">
        <div class="layout-specing">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted mb-1">Welcome back, Cristina!</h6>
                    <h5 class="mb-0">Dashboard</h5>
                </div>

                <div class="mb-0 position-relative">
                    <select class="form-select form-control" id="dailychart">
                        <option selected="">This Month</option>
                        <option value="aug">August</option>
                        <option value="jul">July</option>
                        <option value="jun">June</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col mt-4">
                    <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-pill">
                                <i class="uil uil-shopping-bag fs-4 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-3">
                                <h6 class="mb-0 text-muted">Orders</h6>
                                <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="4800">3402</span></p>
                            </div>
                        </div>

                        <span class="text-success"><i class="uil uil-arrow-growth"></i> 1.46%</span>
                    </a>
                </div><!--end col-->

                <div class="col mt-4">
                    <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-pill">
                                <i class="uil uil-store fs-4 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-3">
                                <h6 class="mb-0 text-muted">Items</h6>
                                <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="145">23</span></p>
                            </div>
                        </div>

                        <span class="text-muted"><i class="uil uil-analysis"></i> 0.0%</span>
                    </a>
                </div><!--end col-->

                <div class="col mt-4">
                    <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-pill">
                                <i class="uil uil-users-alt fs-4 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-3">
                                <h6 class="mb-0 text-muted">Users</h6>
                                <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="9">1.5</span>M</p>
                            </div>
                        </div>

                        <span class="text-danger"><i class="uil uil-chart-down"></i> 0.5%</span>
                    </a>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-xl-12 col-lg-12 mt-4">
                    <div class="card shadow border-0 p-4 pb-0 rounded">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0 fw-bold">Sales Analytics</h6>

                            <div class="mb-0 position-relative">
                                <select class="form-select form-control" id="yearchart">
                                    <option selected>2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                </select>
                            </div>
                        </div>
                        <div id="dashboard" class="apex-chart"></div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->

    <!-- Footer Start -->
    <footer class="shadow py-3">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <div class="text-sm-start text-center mx-md-2">
                        <p class="mb-0 text-muted">© <script>document.write(new Date().getFullYear())</script> Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- End -->
</main>
@endsection
