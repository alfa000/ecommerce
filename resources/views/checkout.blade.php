
@extends('layouts.app')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0"> Checkouts </h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkouts</li>
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
                <div class="col-md-5 col-lg-4 order-md-last">
                    <div class="card rounded shadow p-4 border-0">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="h5 mb-0">Your cart</span>
                            <span class="badge bg-primary rounded-pill">{{ $carts->count() }}</span>
                        </div>
                        <ul class="list-group mb-3 border">
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($carts as $cart)
                            @php
                                $total += $cart->product->price * $cart->qty;
                            @endphp
                            <li class="d-flex justify-content-between lh-sm p-3 border-bottom">
                                <div>
                                    <h6 class="my-0">{{$cart->product->name}}</h6>
                                    <small class="text-muted">{{$cart->qty}} pcs</small>
                                </div>
                                <span class="text-muted">Rp.{{$cart->product->price}}</span>
                            </li>
                            @endforeach
                            <li class="d-flex justify-content-between p-3">
                                <span>Total</span>
                                <strong>Rp.{{ $total }}</strong>
                            </li>
                        </ul>

                    </div>
                </div><!--end col-->

                <div class="col-md-7 col-lg-8">
                    <div class="card rounded shadow p-4 border-0">
                        <h4 class="mb-3">Billing address</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="needs-validation" novalidate method="post" action="{{route('transaction.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="total" value="{{ $total }}">

                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <label for="fullname" class="form-label">Full name</label>
                                    <input type="text" class="form-control" name="name" id="fullname" placeholder="Full Name" value=""
                                        required>
                                    <div class="invalid-feedback">
                                        Valid Full name is required.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email <span
                                            class="text-muted">(Optional)</span></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St"
                                        required>
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>

                            </div>

                            <h4 class="mb-3 mt-4 pt-4 border-top">Payment</h4>

                            <div class="my-3">
                                <div class="form-check">
                                    <input id="debit" name="payment_method" type="radio" class="form-check-input"
                                        required>
                                    <label class="form-check-label" for="debit">Debit card (BNI - 0123123123 - Tedy)</label>
                                </div>
                                <div class="form-check">
                                    <input id="paypal" name="payment_method" type="radio" class="form-check-input"
                                        required>
                                    <label class="form-check-label" for="paypal">PayPal (0123123 - Tedy)</label>
                                </div>
                            </div>

                            <div class="row gy-3">
                                <div class="col-md-6">
                                    <label for="cc-name" class="form-label">Name on card</label>
                                    <input type="text" class="form-control" name="name_on_card" id="cc-name" placeholder="" required>
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="cc-number" class="form-label">Card number</label>
                                    <input type="text" class="form-control" name="card_number" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="pop" class="form-label">Proof of payment</label>
                                    <input type="file" class="form-control" name="pop" id="pop" placeholder="" required>
                                </div>
                            </div>

                            <button class="w-100 btn btn-primary" type="submit">Send</button>
                        </form>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
