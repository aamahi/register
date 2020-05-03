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
                <div class="col-lg-12">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                               {{$error}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="col-lg-8">
                    <div class="checkout-form form-style">
                        <h3>Shipping Address</h3>
                        <form action="{{route('order')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <p>Name</p>
                                    <input type="text"  name="name" value="{{Auth::user()->name}}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <p>Email Address *</p>
                                    <input type="email"  name="email"  value="{{Auth::user()->email}}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <p>Phone No. *</p>
                                    <input type="number" name="phone" value="{{old('phone')}}">
                                </div>
                                <div class="col-12">
                                    <p>Your Address *</p>
                                    <input type="text" name="address" value="{{old('address')}}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <p>Postcode/ZIP</p>
                                    <input type="text" name="zip" value="{{old('zip')}}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <p>Town/City *</p>
                                    <input type="text" name="city" value="{{old('city')}}">
                                </div>
                            </div>
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
                                <input type="hidden" name="subtotal" value="{{$sub_total}}">
                                <input type="hidden" name="total" value="{{$total_price}}">
                                <li>Sub Total <span class="pull-right"><strong>{{$sub_total}}.00 taka</strong></span></li>
                                <li>Total<span class="pull-right">{{$total_price}}</span></li>
                            @else
                                <input type="hidden" name="subtotal" value="{{$sub_total}}">
                                <input type="hidden" name="total" value="{{$sub_total}}">
                                <li>Total <span class="pull-right"><strong>{{$sub_total}}.00 taka</strong></span></li>
                            @endif

                        </ul>
                        <ul class="payment-method">
                            <li>
                                <input id="card" type="radio" value="2" name="payment">
                                <label for="card">Credit Card</label>
                            </li>
                            <li>
                                <input id="delivery" type="radio" value="1" name="payment" checked>
                                <label for="delivery">Cash on Delivery</label>
                            </li>
                        </ul>
                        <button type="submit">Place Order</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->
@endsection
