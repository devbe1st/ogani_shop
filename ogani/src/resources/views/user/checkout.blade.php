@extends('layouts.user')
@section('title', 'Checkout')
@section('content')    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('user/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="{{ route('user.checkout.process') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Address shipping<span>*</span></p>
                                <input type="text" name="address" placeholder="Enter Address" class="checkout__input__add" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone" placeholder="Enter phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" placeholder="Enter Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text" name="note" placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    @php
                                        $subTotal = 0;
                                    @endphp
                                    @foreach ($carts as $cart)
                                        <li>{{ $cart['name'] }} x{{ $cart['quantity'] }} <span>${{ $cart['price'] }}</span></li>
                                        @php
                                            $subTotal += $cart['price'] * $cart['quantity'];
                                        @endphp
                                    @endforeach
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>${{ $subTotal }}</span></div>
                                <div class="checkout__order__total">Total <span>${{ $subTotal }}</span></div>
                                <input type="hidden" name="total" value="{{ $subTotal }}">
                                <div>
                                    <div class="form-group d-flex align-items-center">
                                        <input type="radio" id="cash-on-delivery" value="cash on delivery" name="payment" checked>
                                        <label for="cash-on-delivery" class="mb-0 ml-2">Cash on delivery</label>
                                    </div>
                                    <div class="form-group d-flex align-items-center">
                                        <input type="radio" id="momo" name="payment" value="momo">
                                        <label for="momo" class="mb-0 ml-2">MoMo</label>
                                    </div>
                                </div>
                                <button type="submit" name="checkout" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection