@extends('layouts.app')

@section('content')

        <!-- Hero Start -->
        <section class="home-slider position-relative">
            <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="bg-home slider-rtl-2 d-flex align-items-center" style="background:url('{{ asset('assets/app/images/shop/bg2.jpg') }}') center center;">
                            <div class="bg-overlay bg-overlay-white opacity-5"></div>
                            <div class="container">
                                <div class="row align-items-center mt-5">
                                    <div class="col-lg-7 col-md-7">
                                        <div class="title-heading mt-4">
                                            <h1 class="display-4 fw-bold mb-3 text-black">New Accessories <br> Collections</h1>
                                            <p class="para-desc text-black">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                                            <div class="mt-4">
                                                <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-home slider-rtl-1 d-flex align-items-center" style="background:url('{{ asset('assets/app/images/shop/bg1.jpg') }}') center center;">
                            <div class="bg-overlay bg-overlay-white opacity-5"></div>
                            <div class="container">
                                <div class="row align-items-center mt-5">
                                    <div class="col-lg-7 col-md-7">
                                        <div class="title-heading mt-4">
                                            <h1 class="display-4 fw-bold mb-3 text-black">Headphones <br> Speaker</h1>
                                            <p class="para-desc text-black">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                                            <div class="mt-4">
                                                <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-home slider-rtl-3 d-flex align-items-center" style="background:url('{{ asset('assets/app/images/shop/bg3.jpg') }}') center center;">
                            <div class="bg-overlay bg-overlay-white opacity-5"></div>
                            <div class="container">
                                <div class="row align-items-center mt-5">
                                    <div class="col-lg-7 col-md-7">
                                        <div class="title-heading mt-4">
                                            <h1 class="display-4 fw-bold mb-3 text-black">Modern Furniture, <br> Armchair</h1>
                                            <p class="para-desc text-black">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                                            <div class="mt-4">
                                                <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div>
                    </div>
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Features Start -->
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="card shop-features border-0 rounded overflow-hidden">
                        <img src="{{ asset('assets/app/images/shop/fea1.jpg') }}" class="img-fluid" alt="">
                        <div class="category-title ms-md-4 ms-2">
                            <h4>Summer <br> Collection</h4>
                            <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Shop Now</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="card shop-features border-0 rounded overflow-hidden">
                        <img src="{{ asset('assets/app/images/shop/fea2.jpg') }}" class="img-fluid" alt="">
                        <div class="category-title ms-md-4 ms-2">
                            <h4>Summer <br> Collection</h4>
                            <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Shop Now</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="card shop-features border-0 rounded overflow-hidden">
                        <img src="{{ asset('assets/app/images/shop/fea3.jpg') }}" class="img-fluid" alt="">
                        <div class="category-title ms-md-4 ms-2">
                            <h4>Summer <br> Collection</h4>
                            <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Shop Now</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- Features End -->

        <!-- Start -->
        <section class="section">
            <!-- Start Most Viewed Products -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mb-0">Produk</h5>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    @foreach ($items as $item)
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 position-relative">
                            <div class="shop-image position-relative overflow-hidden rounded shadow">
                                <a href="{{ route('detail', $item->id) }}"><img src="{{ asset('storage/'.$item->img) }}" class="img-fluid" alt=""></a>
                                <a href="{{ route('detail', $item->id) }}" class="overlay-work">
                                    <img src="{{ asset('storage/'.$item->img) }}" class="img-fluid" alt="">
                                </a>
                                <ul class="list-unstyled shop-icons">
                                    <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content pt-4 p-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="{{ route('detail', $item->id) }}" class="text-dark product-name h6 mb-0">{{ $item->name }}</a>
                                    <div class="w-100 text-right small fst-italic mb-0 mt-1">Rp.{{ $item->price }} </div>
                                </div>
                                <p class="mt-1">
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>
                    </div><!--end col-->
                    @endforeach
                </div><!--end row-->
            </div><!--end container-->
            <!-- End Most Viewed Product -->

            <!-- Start CTA -->
            <div class="container-fluid mt-100 mt-60">
                <div class="rounded py-5" style="background: url('{{ asset('assets/app/images/shop/cta.jpg') }}') fixed;">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2 class="fw-bold text-black mb-4">End of Season Clearance <br> Sale upto 30%</h2>
                                    <p class="para-desc text-black mb-0">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                                    <div class="mt-4">
                                        <a href="javascript:void(0)" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
            </div><!--end container-->
            <!-- End CTA -->

            <!-- Start Categories -->
            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mb-0">Kategori</h5>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                        <div class="card features feature-primary explore-feature border-0 rounded text-center">
                            <div class="card-body">
                                <img src="{{ asset('assets/app/images/shop/categories/fashion.jpg') }}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                                <div class="content mt-3">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Fashion</a></h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                        <div class="card features feature-primary explore-feature border-0 rounded text-center">
                            <div class="card-body">
                                <img src="{{ asset('assets/app/images/shop/categories/sports.jpg') }}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                                <div class="content mt-3">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Sports</a></h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                        <div class="card features feature-primary explore-feature border-0 rounded text-center">
                            <div class="card-body">
                                <img src="{{ asset('assets/app/images/shop/categories/music.jpg') }}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                                <div class="content mt-3">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Music</a></h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                        <div class="card features feature-primary explore-feature border-0 rounded text-center">
                            <div class="card-body">
                                <img src="{{ asset('assets/app/images/shop/categories/furniture.jpg') }}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                                <div class="content mt-3">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Furniture</a></h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                        <div class="card features feature-primary explore-feature border-0 rounded text-center">
                            <div class="card-body">
                                <img src="{{ asset('assets/app/images/shop/categories/electronics.jpg') }}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                                <div class="content mt-3">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Electronics</a></h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                        <div class="card features feature-primary explore-feature border-0 rounded text-center">
                            <div class="card-body">
                                <img src="{{ asset('assets/app/images/shop/categories/mobile.jpg') }}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                                <div class="content mt-3">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Mobiles</a></h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <!-- Start Categories -->


        </section><!--end section-->
        <!-- End -->

        <!-- Product View Start -->
        <div class="modal fade" id="productview" tabindex="-1" aria-labelledby="productview-title" aria-hidden="true">
            <div class="modal-dialog  modal-lg modal-dialog-centered">
                <div class="modal-content rounded shadow border-0">
                    <div class="modal-header border-bottom">
                        <h5 class="modal-title" id="productview-title">Branded T-Shirts</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                    </div>

                    <div class="modal-body p-4">
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="tiny-single-item">
                                        <div class="tiny-slide"><img src="{{ asset('assets/app/images/shop/product/single-2.jpg') }}" class="img-fluid rounded" alt=""></div>
                                        <div class="tiny-slide"><img src="{{ asset('assets/app/images/shop/product/single-3.jpg') }}" class="img-fluid rounded" alt=""></div>
                                        <div class="tiny-slide"><img src="{{ asset('assets/app/images/shop/product/single-4.jpg') }}" class="img-fluid rounded" alt=""></div>
                                        <div class="tiny-slide"><img src="{{ asset('assets/app/images/shop/product/single-5.jpg') }}" class="img-fluid rounded" alt=""></div>
                                        <div class="tiny-slide"><img src="{{ asset('assets/app/images/shop/product/single-6.jpg') }}" class="img-fluid rounded" alt=""></div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-7 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <h4 class="title">Branded T-Shirts</h4>
                                    <h5 class="text-muted">$21.00 <del class="text-danger ms-2">$25.00</del> </h5>
                                    <ul class="list-unstyled text-warning h5">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <h5 class="mt-4">Overview :</h5>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero exercitationem, unde molestiae sint quae inventore atque minima natus fugiat nihil quisquam voluptates ea omnis. Modi laborum soluta tempore unde accusantium.</p>

                                    <div class="row mt-4 pt-2">
                                        <div class="col-12">
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-0">Your Size:</h6>
                                                <ul class="list-unstyled mb-0 ms-3">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">S</a></li>
                                                    <li class="list-inline-item ms-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">M</a></li>
                                                    <li class="list-inline-item ms-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">L</a></li>
                                                    <li class="list-inline-item ms-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">XL</a></li>
                                                </ul>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12 mt-4">
                                            <div class="d-flex shop-list align-items-center">
                                                <h6 class="mb-0">Quantity:</h6>
                                                <div class="ms-3">
                                                    <div class="qty-icons">
                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn btn-icon btn-soft-primary minus">-</button>
                                                        <input min="0" name="quantity" value="0" type="number" class="btn btn-icon btn-soft-primary qty-btn quantity">
                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn btn-icon btn-soft-primary plus">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div class="mt-4 pt-2">
                                        <a href="javascript:void(0)" class="btn btn-primary">Shop Now</a>
                                        <a href="shop-cart.html" class="btn btn-soft-primary ms-2">Add to Cart</a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Product View End -->
@endsection
