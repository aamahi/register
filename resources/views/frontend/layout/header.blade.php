<div class="search-area flex-style">
    <span class="closebar">Close</span>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-12">
                <div class="search-form">
                    <form action="#">
                        <input type="text" placeholder="Search Here...">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search-form here -->

<header class="header-area">
    <div class="header-top bg-2">
        <div class="fluid-container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <ul class="d-flex header-contact">
                        <li><i class="fa fa-phone"></i> +01 123 456 789</li>
                        <li><i class="fa fa-envelope"></i> youremail@gmail.com</li>
                    </ul>
                </div>
                <div class="col-md-6 col-12">
                    <ul class="d-flex account_login-area">
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-user"></i> My Account <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown_style">
                                <li><a href="{{route('customar_login')}}">Login</a></li>
                                <li><a href="{{route('customar_register')}}">Register</a></li>
                                <li><a href={{route('cart')}}>Cart</a></li>
                                <li><a href="{{url('/checkout')}}">Checkout</a></li>
                                <li><a href="{{route('wish')}}">wishlist</a></li>
                            </ul>
                        </li>
                        @guest
                        <li><a href="{{route('customar_register')}}"> Login/Register </a></li>
                        @endguest
                        @auth
                            <li><a href="">{{Auth::user()->name}} </a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="fluid-container">
            <div class="row">
                <div class="col-lg-3 col-md-7 col-sm-6 col-6">
                    <div class="logo">
                        <a href="{{url('')}}">
                            <img src="{{asset('frontend/images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <nav class="mainmenu">
                        <ul class="d-flex">
                            <li class="@yield('home')">
                                <a href="{{url('')}}">Home</a>
                            </li>
                            <li class="@yield('about')">
                                <a href="{{route('about')}}">About</a>
                            </li>
                            <li class="@yield('shop')">
                                <a href="{{route('shop')}}">Shop </a>
                            </li>
                            <li class="@yield('blog')">
                                <a href="{{route('blog')}}">Blog</a>
                            </li>
                            <li class="@yield('contact')">
                                <a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-4 col-lg-2 col-sm-5 col-4">
                    <ul class="search-cart-wrapper d-flex">
                        <li class="search-tigger"><a href="javascript:void(0);"><i class="flaticon-search"></i></a></li>
                        <li>
                            <a href="javascript:void(0);"><i class="flaticon-like"></i> <span>{{\App\Model\Wish::where('ip_address',request()->ip())->count()}}</span></a>
                            <ul class="cart-wrap dropdown_style">
                                @php
                                    $total_price =0;
                                @endphp
                                @forelse(\App\Model\Wish::where('ip_address',request()->ip())->get() as $wish)
                                <li class="cart-items">
                                    <div class="cart-img">
                                        <img width="65" src="{{asset("Uploads/Products/".($wish->products)->photo)}}" alt="">
                                    </div>
                                    <div class="cart-content">
                                        <a href="{{route('wish')}}">{{($wish->products)->product_name}}</a>
                                        <p>{{($wish->products)->price}}.00 tk</p>
                                        <a href="{{route('wish_remove',$wish->id)}}"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                    @php
                                    $total_price = $total_price +(($wish->products)->price)
                                    @endphp
                                @empty
                                    NO Product Add To Wishlist
                                @endforelse
                                <li>Subtotol: <span class="pull-right">{{$total_price}}.00 taka</span></li>
                                <li>
                                    <a href="{{route('wish')}}"><button>WishList</button></a>
                                </li>
                            </ul>
                        </li>
                        <li>

                            <a href="javascript:void(0);"><i class="flaticon-shop"></i> <span>{{\App\Model\Cart::where('ip_address',request()->ip())->count()}}</span></a>
                            <ul class="cart-wrap dropdown_style">
                                @php
                                $total = 0;
                                @endphp
                                @foreach(\App\Model\Cart::with('products')->where('ip_address',request()->ip())->get() as $cart)

                                    <li class="cart-items">
                                        <div class="cart-img">
                                            <img width="65" src="{{asset('Uploads/Products/'.($cart->products)->photo)}}" alt="">
                                        </div>
                                        <div class="cart-content">
                                            <a href="{{route('cart')}}">{{($cart->products)->product_name}}</a>
                                            <span>QTY : {{$cart->quantity}}</span>
                                            <p>{{($cart->products)->price*$cart->quantity}}.00 tk</p>
                                            <a href="{{route('cart_remove',$cart->id)}}"><i class="fa fa-times"></i></a>
                                        </div>
                                    </li>
                                    @php
                                        $total = $total+(($cart->products)->price*$cart->quantity);
                                    @endphp
                                @endforeach
                                <li>Subtotol: <span class="pull-right">{{$total}}.00 taka</span></li>
                                <li>
                                    <a href="{{route('cart')}}"><button>Got to Cart</button></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1 col-sm-1 col-2 d-block d-lg-none">
                    <div class="responsive-menu-tigger">
                        <a href="javascript:void(0);">
                            <span class="first"></span>
                            <span class="second"></span>
                            <span class="third"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- responsive-menu area start -->
        <div class="responsive-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-block d-lg-none">
                        <ul class="metismenu">
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li class="sidemenu-items">
                                <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Shop </a>
                                <ul aria-expanded="false">
                                    <li><a href="shop.html">Shop Page</a></li>
                                    <li><a href="single-product.html">Product Details</a></li>
                                    <li><a href="cart.html">Shopping cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="sidemenu-items">
                                <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Pages </a>
                                <ul aria-expanded="false">
                                    <li><a href="about.html">About Page</a></li>
                                    <li><a href="single-product.html">Product Details</a></li>
                                    <li><a href="cart.html">Shopping cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </li>
                            <li class="sidemenu-items">
                                <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Blog</a>
                                <ul aria-expanded="false">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- responsive-menu area start -->
    </div>
</header>
