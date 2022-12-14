
@extends('layouts.app')

@section('content')
<!-- Hero Start -->
<section class="bg-half-170 bg-light d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h4 class="title mb-0"> Shopping Cart </h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
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

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive bg-white shadow rounded">
                    <table class="table mb-0 table-center">
                        <thead>
                            <tr>
                                <th class="border-bottom py-3" style="min-width:20px "></th>
                                <th class="border-bottom text-start py-3" style="min-width: 300px;">Product</th>
                                <th class="border-bottom text-center py-3" style="min-width: 160px;">Price</th>
                                <th class="border-bottom text-center py-3" style="min-width: 160px;">Qty</th>
                                <th class="border-bottom text-end py-3 pe-4" style="min-width: 160px;">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($carts as $cart)
                            @php
                                $total += $cart->product->price * $cart->qty;
                            @endphp
                            <tr class="shop-list">
                                <td class="h6 text-center"><a href="javascript:void(0)" class="text-danger"><i class="uil uil-times"></i></a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/'.$cart->product->img) }}" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                        <h6 class="mb-0 ms-3">{{ $cart->product->name }}</h6>
                                    </div>
                                </td>
                                <td class="text-center">Rp.{{ $cart->product->price }}</td>
                                <td class="text-center qty-icons">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn btn-icon btn-soft-primary minus">-</button>
                                    <input min="0" name="quantity" value="{{$cart->qty}}" type="number" class="btn btn-icon btn-soft-primary qty-btn quantity">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn btn-icon btn-soft-primary plus">+</button>
                                </td>
                                <td class="text-end fw-bold pe-4">Rp.{{ $cart->product->price * $cart->qty }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-lg-8 col-md-6 mt-4 pt-2">
                <a href="{{route('home')}}" class="btn btn-primary">Shop More</a>
                <a href="javascript:void(0)" class="btn btn-soft-primary ms-2">Update Cart</a>
            </div>
            <div class="col-lg-4 col-md-6 ms-auto mt-4 pt-2">
                <div class="table-responsive bg-white rounded shadow">
                    <table class="table table-center table-padding mb-0">
                        <tbody>
                            <tr class="bg-light">
                                <td class="h6 ps-4 py-3">Total</td>
                                <td class="text-end fw-bold pe-4">Rp.{{$total}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 pt-2 text-end">
                    <a href="{{route('checkout')}}" class="btn btn-primary">Proceed to checkout</a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
@endsection
