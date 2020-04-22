@extends('layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-md-3">
                    <section class="card">
                        <div class="card-body">
                            <input type="text" placeholder="Keyword Search" class="form-control">
                        </div>
                    </section>
                    <section class="card">
                        <header class="card-header">
                            Category
                        </header>
                        <div class="card-body">
                            <ul class="nav flex-column prod-cat">
                                @foreach($categories as $category)
                                    <li class="nav-item">
                                        <a href="" class="nav-link"><i class=" fa fa-angle-right"></i> {{$category->category_name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                    <section class="card">
                        <header class="card-header">
                            Filter
                        </header>
                        <div class="card-body">
                            <form role="form product-form">
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select class="form-control">
                                        <option>Wallmart</option>
                                        <option>Catseye</option>
                                        <option>Moonsoon</option>
                                        <option>Textmart</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Color</label>
                                    <select class="form-control">
                                        <option>White</option>
                                        <option>Black</option>
                                        <option>Red</option>
                                        <option>Green</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control">
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                        <option>Extra Large</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="submit">Filter</button>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="col-md-9">

                    <section class="card ">
                        <div class="card-body row">
                            <div class="col-md-6">
                                <div class="pro-img-details">
                                    <img class="img-fluid" src="{{asset('Uploads/Products/'.$product->photo)}}" alt=""/>
                                </div>
                                <hr/>
                                <div class="pro-img-list">
                                    @foreach($product->multiple_photos as $multiple_photo)
                                        <a href="#">
                                            <img width="90" src="{{asset('Uploads/Multiple_photo/'.$multiple_photo->multiple_photo)}}" alt="">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="pro-d-title">
                                    <a href="#" class="">
                                        {{$product->product_name}}
                                    </a>
                                </h4>
                                <p>
                                    {{$product->decription}}
                                </p>
                                <div class="product_meta">
                                    <span class="posted_in"> <strong>Categories :</strong> <a rel="tag" href="#"> {{($product->category)->category_name}}</a></span>
                                    <span class="tagged_as"><strong>Quantity :</strong> <a rel="tag" href="#"> {{$product->quantity}}</a></span>
                                </div>
                                <div class="m-bot15"> <strong>Price : </strong> <span>{{$product->price}}.00 taka</span></div>
                                <p>
                                    <a href="{{route('admin.product')}}" class="btn btn-round btn-info" type="button"><i class="fa fa-reply"></i> Back</a>
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="card">
                        <header class="card-header tab-bg-dark-navy-blue p-0">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Review</a>
                                </li>
                            </ul>

                        </header>
                        <div class="card-body">
                            <div class="tab-content tasi-tab" id="myTabContent">
                                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <p>{{$product->decription}}. {{$product->decription}}. {{$product->decription}}</p>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <article class="media mb-3">
                                        <a class="mr-3 p-thumb">
                                            <img src="img/avatar-mini.jpg">
                                        </a>
                                        <div class="media-body">
                                            <a class="cmt-head" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                            <p> <i class="fa fa-clock-o"></i> 1 hours ago</p>
                                        </div>
                                    </article>
                                    <article class="media mb-3">
                                        <a class="mr-3 p-thumb">
                                            <img src="img/avatar-mini2.jpg">
                                        </a>
                                        <div class="media-body">
                                            <a class="cmt-head" href="#">Nulla vel metus scelerisque ante sollicitudin commodo</a>
                                            <p> <i class="fa fa-clock-o"></i> 23 mins ago</p>
                                        </div>
                                    </article>
                                    <article class="media mb-3">
                                        <a class="mr-3 p-thumb">
                                            <img src="img/avatar-mini3.jpg">
                                        </a>
                                        <div class="media-body">
                                            <a class="cmt-head" href="#">Donec lacinia congue felis in faucibus. </a>
                                            <p> <i class="fa fa-clock-o"></i> 15 mins ago</p>
                                        </div>
                                    </article>
                                </div>
                            </div>

                        </div>
                    </section>

                    <div class="row product-list">
                        <div class="col-md-4">
                            <section class="card">
                                <div class="pro-img-box">
                                    <img src="img/product-list/pro-1.jpg" alt=""/>
                                    <a href="#" class="adtocart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>

                                <div class="card-body text-center">
                                    <h4>
                                        <a href="#" class="pro-title">
                                            Leopard Shirt Dress
                                        </a>
                                    </h4>
                                    <p class="price">$300.00</p>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-4">
                            <section class="card">
                                <div class="pro-img-box">
                                    <img src="img/product-list/pro1.jpg" alt=""/>
                                    <a href="#" class="adtocart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>

                                <div class="card-body text-center">
                                    <h4>
                                        <a href="#" class="pro-title">
                                            Leopard Shirt Dress
                                        </a>
                                    </h4>
                                    <p class="price">$300.00</p>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-4">
                            <section class="card">
                                <div class="pro-img-box">
                                    <img src="img/product-list/pro2.jpg" alt=""/>
                                    <a href="#" class="adtocart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>

                                <div class="card-body text-center">
                                    <h4>
                                        <a href="#" class="pro-title">
                                            Leopard Shirt Dress
                                        </a>
                                    </h4>
                                    <p class="price">$300.00</p>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
@endsection

