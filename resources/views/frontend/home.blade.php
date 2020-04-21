@extends('frontend.layout.index')
@section('home')
    active
@endsection
@section('content')
    <!-- slider-area start -->
    @include('frontend.content.slider')
    <!-- slider-area end -->
    <!-- featured-area start -->
    @include('frontend.content.featured_area')
    <!-- featured-area end -->
    <!-- start count-down-section -->
    @include('frontend.content.count_down')
    <!-- end count-down-section -->
    <!-- best product -->
    @include('frontend.content.best_product')
    <!-- best product-->
    <!-- product-area start -->
    @include('frontend.content.product_area')
    <!-- product-area end -->
    <!-- testmonial-area start -->
    @include('frontend.content.testimonial')
    <!-- testmonial-area end -->
@endsection
