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
                        <h2>Shop Page</h2>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><span>Shop</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- product-area start -->
    <div class="product-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="product-menu">
                        <ul class="nav justify-content-center">
                            <li>
                                <a class="active" data-toggle="tab" href="#all">All product</a>
                            </li>
                            @foreach($categories as $category)
                                <li>
                                    <a data-toggle="tab" href="#category_{{$category->id}}">{{$category->category_name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <ul class="row">
                        @foreach($products as $product)
                            <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="product-wrap">
                                    <div class="product-img">
                                        <span>Sale</span>
                                        <img src="{{asset('Uploads/Products/'.$product->photo)}}" alt="">
                                        <div class="product-icon flex-style">
                                            <ul>
                                                <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                <form action="{{route('add_wish')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    <li><button type="submit" class="btn btn-outline-danger"><i class="fa fa-heart"></i></button></li>
                                                </form>
                                                <form action="{{route('add_cart')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <li><button type="submit" class="btn btn-outline-danger"><i class="fa fa-shopping-bag"></i></button></li>
                                                </form>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="{{route('product_detailse',$product->id)}}">{{$product->product_name}}</a></h3>
                                        <p class="pull-left"> {{$product->price}}.00 tk

                                        </p>
                                        <ul class="pull-right d-flex">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @foreach($categories as $category)
                    <div class="tab-pane" id="category_{{$category->id}}">
                        <ul class="row">
                            @foreach(\App\Model\Product::where('category_id',$category->id)->get() as $product)
                                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>Sale</span>
                                            <img src="{{asset('Uploads/Products/'.$product->photo)}}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    <form action="{{route('add_wish')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                        <li><button type="submit" class="btn btn-outline-danger"><i class="fa fa-heart"></i></button></li>
                                                    </form>
                                                    <form action="{{route('add_cart')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <li><button type="submit" class="btn btn-outline-danger"><i class="fa fa-shopping-bag"></i></button></li>
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="{{route('product_detailse',$product->id)}}">{{$product->product_name}}</a></h3>
                                            <p class="pull-left"> {{$product->price}}.00 tk

                                            </p>
                                            <ul class="pull-right d-flex">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- product-area end -->
@endsection
