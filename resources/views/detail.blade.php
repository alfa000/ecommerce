@extends('layouts.app')

@section('content')
        <!-- Hero Start -->
        <section class="bg-half-170 bg-light d-table w-100">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="pages-heading">
                            <h4 class="title mb-0"> {{$product->name}} </h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="position-breadcrumb">
                    <nav aria-label="breadcrumb" class="d-inline-block">
                        <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                        </ul>
                    </nav>
                </div>
            </div> <!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-color-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Hero End -->

        <section class="section pb-0 mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="tiny-single-item">
                            <div class="tiny-slide"><img src="{{ asset('storage/'.$product->img) }}" class="img-fluid rounded" alt=""></div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title ms-md-4">
                            <h4 class="title">{{$product->name}} </h4>
                            <h5 class="text-muted">Rp.{{$product->price}}</h5>

                            <h5 class="mt-4 py-2">Overview :</h5>
                            <p class="text-muted">{{ $product->desc }}</p>

                            <div class="row mt-4 pt-2">
                                <div class="col-lg-6 col-12">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0">Category :</h6>
                                        <ul class="list-unstyled mb-0 ms-3">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-soft-primary">{{ $product->category }}</a></li>
                                        </ul>
                                    </div>
                                </div><!--end col-->

                            </div><!--end row-->

                            <div class="mt-4 pt-2">
                                <a href="{{ route('cart.create', $product->id) }}" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
@endsection
