@extends('frontend.layout.index')
@section('contact')
    active
@endsection
@section('content')
    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Account</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Register</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- checkout-area start -->
    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
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
                    <form action="{{route('customar_register')}}" method="post">
                        @csrf
                        <div class="account-form form-style">
                            <input type="hidden" name="rule" value="1">
                            <p>Name *</p>
                            <input type="text" name="name">
                            <p>Email Address *</p>
                            <input type="email" name="email">
                            <p>Password *</p>
                            <input type="Password" name="password">
                            <p>Confirm Password *</p>
                            <input type="Password" name="password_confirmation">
                            <button>Register</button>
                            <div class="text-center">
                                <a href="{{route('customar_login')}}">Or Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->
@endsection
