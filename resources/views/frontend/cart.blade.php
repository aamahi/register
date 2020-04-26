@extends('frontend.layout.index')
@section('shop')
    active
@endsection
@section('content')
    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Shopping Cart</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Shopping Cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- cart-area start -->
    <div class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('update_cart')}}" method="post" class="mr-1">
                        @csrf
                        <table class="table-responsive cart-wrap">
                            <thead>
                            <tr>
                                <th class="images">Image</th>
                                <th class="product">Product</th>
                                <th class="ptice">Price</th>
                                <th class="quantity">Quantity</th>
                                <th class="total">Total</th>
                                <th class="remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $total_price= 0;
                            @endphp
                            @forelse($carts as $cart)
                                <tr>
                                <td class="images"><img src="{{asset('Uploads/Products/'.($cart->products)->photo)}}" alt=""></td>
                                <td class="product"><a href="single-product.html">{{($cart->products)->product_name}}</a></td>
                                <td class="ptice">{{($cart->products)->price}}.00 tk</td>
                                <td class="quantity cart-plus-minus">
                                    <input type="text" name ='quantity[{{$cart->id}}]' value="{{$cart->quantity}}" />
                                </td>
                                <td class="total">{{($cart->products)->price*$cart->quantity}}</td>
                                <td class="remove"><a href="{{route('cart_remove',$cart->id)}}"><i class="fa fa-times"></i></a></td>
                            </tr>
                                @php
                                    $total_price+=($cart->products)->price*$cart->quantity;
                                @endphp
                            @empty

                                <tr>
                                    <td col-span="300"> NO Product !</td>
                                </tr>

                            @endforelse
                            </tbody>
                        </table>
                        <div class="row mt-60">
                            <div class="col-xl-4 col-lg-5 col-md-6 ">
                                <div class="cartcupon-wrap">
                                    <ul class="d-flex">
                                        <li>
                                            <button type="submit">Update Cart</button>
                                        </li>
                                    </form>
                                        <li><a href="{{route('shop')}}">Continue Shopping</a></li>
                                    </ul>
                                    <h3>Cupon</h3>
                                    <p>Enter Your Cupon Code and get 10% off (MAHI-10)</p>
                                <form action="{{route('cart')}}" method="post">
                                    @csrf
                                    <div class="cupon-wrap">
                                        <input type="text" placeholder="Cupon Code" name="cupon_name">
                                        <button type="submit">Apply Cupon</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="col-xl-3 offset-xl-5 col-lg-4 offset-lg-3 col-md-6">
                                <div class="cart-total text-right">
                                    <h3>Cart Totals</h3>
                                    <ul>
                                        <li><span class="pull-left">Subtotal </span>{{$total_price}} .00 taka</li>
                                        @isset($discount)
                                            <li><span class="pull-left">Discount Amount:  </span>{{($total_price*$discount)/100}} taka</li>
                                        @endisset
                                        <li><span class="pull-left"> Total </span>
                                            @isset($discount)
                                                {{$total_price -= ($total_price*$discount)/100}}
                                            @else
                                                {{$total_price}}
                                            @endisset
                                        </li>
                                    </ul>
                                    <a href="">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-area end -->
@endsection
