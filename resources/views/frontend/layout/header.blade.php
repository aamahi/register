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
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="register.html"> Login/Register </a></li>
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
                            <li class="active"><a href="{{url('')}}">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a href="{{route('shop')}}">Shop </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown_style">
                                    <li class="=t" style="margin-left: 30px;"><a href="faq.html">FAQ</a> <br><img class="mt-3"  src="{{asset('frontend/images/cart/3.jpg')}}"></li>
                                    <li class="float-left" style="margin-left: 30px;><a href="faq.html">FAQ</a> <br><img class="mt-3"  src="{{asset('frontend/images/cart/3.jpg')}}"></li>
                                    <li class="float-left" style="margin-left: 30px;><a href="faq.html">FAQ</a> <br><img class="mt-3"  src="{{asset('frontend/images/cart/3.jpg')}}"></li>
                                    <li class="float-left" style="margin-left: 30px;><a href="faq.html">FAQ</a> <br><img class="mt-3"  src="{{asset('frontend/images/cart/3.jpg')}}"></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown_style">
                                    <li class="nav-item">
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img class="mt-3"  src="{{asset('frontend/images/cart/3.jpg')}}"> Anim pariatur</a></div>
{{--                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img class="mt-3"  src="{{asset('frontend/images/cart/3.jpg')}}"> Reprehenderit</a></div>--}}
{{--                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img class="mt-3"  src="{{asset('frontend/images/cart/3.jpg')}}"> Keffiyeh helvetica</a></div>--}}
{{--                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img class="mt-3"  src="{{asset('frontend/images/cart/3.jpg')}}"> Pariatur cliche</a></div>--}}
{{--                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img class="mt-3"  src="{{asset('frontend/images/cart/3.jpg')}}"> Food truck quinoa</a></div>--}}
                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img class="mt-3"  src="{{asset('frontend/images/cart/3.jpg')}}"> Leggings occaecat craft</a></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('blog')}}">Blog</a>
{{--                                <a href="{{route('blog')}}">Blog <i class="fa fa-angle-down"></i></a>--}}
                            </li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-4 col-lg-2 col-sm-5 col-4">
                    <ul class="search-cart-wrapper d-flex">
                        <li class="search-tigger"><a href="javascript:void(0);"><i class="flaticon-search"></i></a></li>
                        <li>
                            <a href="javascript:void(0);"><i class="flaticon-like"></i> <span>2</span></a>
                            <ul class="cart-wrap dropdown_style">
                                <li class="cart-items">
                                    <div class="cart-img">
                                        <img src="{{asset('frontend/images/cart/1.jpg')}}" alt="">
                                    </div>
                                    <div class="cart-content">
                                        <a href="cart.html">Pure Nature Product</a>
                                        <span>QTY : 1</span>
                                        <p>$35.00</p>
                                        <i class="fa fa-times"></i>
                                    </div>
                                </li>
                                <li class="cart-items">
                                    <div class="cart-img">
                                        <img src="{{asset('frontend/images/cart/3.jpg')}}" alt="">
                                    </div>
                                    <div class="cart-content">
                                        <a href="cart.html">Pure Nature Product</a>
                                        <span>QTY : 1</span>
                                        <p>$35.00</p>
                                        <i class="fa fa-times"></i>
                                    </div>
                                </li>
                                <li>Subtotol: <span class="pull-right">$70.00</span></li>
                                <li>
                                    <button>Check Out</button>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="flaticon-shop"></i> <span>3</span></a>
                            <ul class="cart-wrap dropdown_style">
                                <li class="cart-items">
                                    <div class="cart-img">
                                        <img src="{{asset('frontend/images/cart/1.jpg')}}" alt="">
                                    </div>
                                    <div class="cart-content">
                                        <a href="cart.html">Pure Nature Product</a>
                                        <span>QTY : 1</span>
                                        <p>$35.00</p>
                                        <i class="fa fa-times"></i>
                                    </div>
                                </li>
                                <li class="cart-items">
                                    <div class="cart-img">
                                        <img src="{{asset('frontend/images/cart/3.jpg')}}" alt="">
                                    </div>
                                    <div class="cart-content">
                                        <a href="cart.html">Pure Nature Product</a>
                                        <span>QTY : 1</span>
                                        <p>$35.00</p>
                                        <i class="fa fa-times"></i>
                                    </div>
                                </li>
                                <li class="cart-items">
                                    <div class="cart-img">
                                        <img src="{{asset('frontend/images/cart/2.jpg')}}" alt="">
                                    </div>
                                    <div class="cart-content">
                                        <a href="cart.html">Pure Nature Product</a>
                                        <span>QTY : 1</span>
                                        <p>$35.00</p>
                                        <i class="fa fa-times"></i>
                                    </div>
                                </li>
                                <li>Subtotol: <span class="pull-right">$70.00</span></li>
                                <li>
                                    <button>Check Out</button>
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
