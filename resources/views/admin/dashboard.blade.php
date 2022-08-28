@extends('layouts.admin')
@section('content')
<main class="bg-light">

    <div class="container-fluid">
        <div class="layout-specing">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted mb-1">Welcome back, {{Auth::user()->name}}!</h6>
                    <h5 class="mb-0">Dashboard</h5>
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
                                <p class="fs-5 text-dark fw-bold mb-0"><span>{{ $order }}</span></p>
                            </div>
                        </div>
                    </a>
                </div><!--end col-->

                <div class="col mt-4">
                    <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-pill">
                                <i class="uil uil-store fs-4 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-3">
                                <h6 class="mb-0 text-muted">Product</h6>
                                <p class="fs-5 text-dark fw-bold mb-0"><span>{{ $product }}</span></p>
                            </div>
                        </div>
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
                                <p class="fs-5 text-dark fw-bold mb-0"><span >{{ $user }}</span></p>
                            </div>
                        </div>

                    </a>
                </div><!--end col-->
            </div><!--end row-->

        </div>
    </div><!--end container-->

</main>
@endsection
