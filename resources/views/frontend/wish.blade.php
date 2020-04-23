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
                        <h2>Wishlist</h2>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><span>Wishlist</span></li>
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
                    <form action="http://themepresss.com/tf/html/tohoney/cart">
                        <table class="table-responsive cart-wrap">
                            <thead>
                            <tr>
                                <th class="images">Image</th>
                                <th class="product">Product</th>
                                <th class="ptice">Price</th>
                                <th class="stock">Stock Stutus </th>
                                <th class="addcart">Add to Cart</th>
                                <th class="remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($wishes as $wish)
                                <tr>
                                    <td class="images"><img src="{{asset("Uploads/Products/".($wish->products)->photo)}}" alt=""></td>
                                    <td class="product"><a href="single-product.html">{{($wish->products)->product_name}}</a></td>
                                    <td class="ptice">{{($wish->products)->price}}</td>
                                    <form action="{{url('add_cart')}}" method="post">
                                        @csrf
                                            <input type="hidden" name="product_id" value="{{($wish->products)->id}}">
                                        <td class="quantity cart-plus-minus">
                                            <input type="text" value="1" name="quantity">
                                        </td>
                                        <td class="addcart">
                                            <button type="submit" class="btn btn-danger">Add to Cart</button>
                                        </td>
                                    </form>
                                    <td class="remove"><i class="fa fa-times"></i></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-area end -->
@endsection
