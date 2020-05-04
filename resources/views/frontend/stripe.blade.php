
@extends('frontend.layout.index')

@section('content')
    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Blog Page</h2>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><span>Blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- blog-area start -->
    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="float-left">Payment</h3>
                            <img class="float-right" src="http://i76.imgup.net/accepted_c22e0.png">

                        </div>
{{--                        <div class="card-body">--}}
{{--                            <form action="{{ route('stripe.post') }}" method="post"--}}
{{--                                  data-cc-on-file="false"--}}
{{--                                  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"--}}
{{--                                  id="payment-form">--}}
{{--                                @csrf--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="card_name">Name Of Card</label>--}}
{{--                                        <input type="text" class="form-control" id="card_name" required>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="card_number">Card Number</label>--}}
{{--                                        <input autocomplete='off' type="text" class="form-control card-number" id="card_number" required>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-row">--}}
{{--                                        <div class="form-group col-md-4">--}}
{{--                                            <label>CVC</label>--}}
{{--                                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' type='text'>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-md-4">--}}
{{--                                            <label >Expiration Month</label>--}}
{{--                                            <input type="text"  class='form-control card-expiry-month' placeholder='MM' required>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-md-4">--}}
{{--                                            <label>Expiration Year</label>--}}
{{--                                            <input type="text" class='form-control card-expiry-year' placeholder='YYYY' required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <button type="submit" class="btn btn-primary btn-block">Pay Now (100 tk)</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                        <div class="card-body">
                            <form role="form" action="{{route('stripe.post')}}" method="post" class="require-validation"
                                      data-cc-on-file="false"
                                      data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                      id="payment-form">
                                    @csrf

                                    <div class='form-group'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Name on Card</label> <input
                                                class='form-control' size='4' type='text'>
                                        </div>
                                    </div>

                                    <div class='form-group'>
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label ml-1'>Card Number</label> <input
                                                autocomplete='off' class='form-control card-number' size='20'
                                                type='text'>
                                        </div>
                                    </div>

                                    <div class='row'>
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                                            class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                                                            type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Month</label> <input
                                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                                type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Year</label> <input
                                                class='form-control card-Cexpiry-year' placeholder='YYYY' size='4'
                                                type='text'>
                                        </div>
                                    </div>

                                    <div class="from-group">
                                        <div class="col-xs-12">
                                            <input type="hidden" name="total" value="{{$total}}">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" >Pay Now ({{$total}} taka)</button>
                                        </div>
                                    </div>

                                </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr/>

        </div>
    </div>
    <!-- blog-area end -->
@endsection


