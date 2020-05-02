@extends('frontend.layout.index')
@section('content')
    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Checkout</h2>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><span>Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- checkout-area start -->
    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-form form-style">
                        <h3>Billing Details</h3>
                        <form action="http://themepresss.com/tf/html/tohoney/checkout">
                            <div class="row">
                                <div class="col-12">
                                    <p>Name</p>
                                    <input type="text" value="{{Auth::user()->name}}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <p>Email Address *</p>
                                    <input type="email" value="{{Auth::user()->email}}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <p>Phone No. *</p>
                                    <input type="number">
                                </div>
                                <div class="col-12">
                                    <p>Your Address *</p>
                                    <input type="text">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <p>Postcode/ZIP</p>
                                    <input type="email">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <p>Town/City *</p>
                                    <input type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="order-area">
                        <h3>Your Order</h3>
                        <ul class="total-cost">
                            @php
                              $sub_total = 0;
                            @endphp
                            @foreach($carts as $cart_item)
                                <li>{{($cart_item->products)->product_name}}<span class="pull-right">{{($cart_item->products)->price}} x {{$cart_item->quantity}} = {{($cart_item->products)->price*$cart_item->quantity}}.00 taka</span></li>
                                @php
                                    $sub_total +=($cart_item->products)->price*($cart_item->quantity);
                                @endphp
                            @endforeach
                            @if($total_price)
                                <li>Sub Total <span class="pull-right"><strong>{{$sub_total}}.00 taka</strong></span></li>
                                <li>Total<span class="pull-right">{{$total_price}}</span></li>
                            @else
                                <li>Total <span class="pull-right"><strong>{{$sub_total}}.00 taka</strong></span></li>
                            @endif

                        </ul>
                        <ul class="payment-method">
                            <li>
                                <input id="card" type="checkbox">
                                <label for="card">Credit Card</label>
                            </li>
                            <li>
                                <input id="delivery" type="checkbox">
                                <label for="delivery">Cash on Delivery</label>
                            </li>
                        </ul>
                        <button>Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->
@endsection
