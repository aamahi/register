@extends('layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- invoice start-->
            <section>
                <div class="card card-primary">
                    <!--<div class="card-heading navyblue"> INVOICE</div>-->
                    <div class="card-body">
                        <div class="row invoice-list">
                            <div class="col-lg-4 col-sm-4">
                                <h4>BILLING INFORMATION</h4>
                                <p>
                                    {{$customar_info->name}} <br>
                                    {{$customar_info->phone}} <br>
                                    {{$customar_info->email}}<br>
                                </p>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <h4>SHIPPING ADDRESS</h4>
                                <p>
                                    {{$customar_info->address}}<br>
                                    {{$customar_info->zip}},
                                    {{$customar_info->city}}<br>
                                </p>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <h4>INVOICE INFO</h4>
                                <ul class="unstyled">
                                    <li>Invoice Number		: <strong>{{$customar_info->id}}</strong></li>
                                    <li>Invoice Date		: {{$customar_info->created_at->format("d/m/Y")}}</li>
                                    <li>Due Date			: {{\Carbon\Carbon::now()->format("d/m/Y")}}</li>
                                    <li>Payment   		    : @if($customar_info->payment==1)
                                                                    Cash on Delivary
                                                                @else
                                                                    Online Payment
                                                                @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th class="hidden-phone">Description</th>
                                <th class="">Price</th>
                                <th class="">Quantity</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customar_info->order_lists as $order)
                            <tr>
                                <td>{{\App\Model\Product::where('id',$order->product_id)->first()->product_name}}</td>
                                <td class="hidden-phone">{{\App\Model\Product::where('id',$order->product_id)->first()->decription}}</td>
                                <td class="">{{\App\Model\Product::where('id',$order->product_id)->first()->price}}</td>
                                <td class="">{{$order->quantity}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row justify-content-end">
                            <div class="col-lg-4 invoice-block ">
                                <ul class="unstyled amounts">
                                    <li><strong>Sub - Total amount : </strong>{{$customar_info->subtotal}} taka</li>
                                    <li><strong>Dicount Amount : </strong>{{($customar_info->total)-($customar_info->subtotal)}} taka</li>
                                    <li><strong>Grand Total : </strong> {{$customar_info->total}} taka</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center invoice-btn">
                            @if($customar_info->status==0)
                            <a href="{{route('order_delivary',$customar_info->id)}}" class="btn btn-success text-light"><i class="fa fa-check"></i> Delivary </a>
                            <a href="{{route('order_delivary',$customar_info->id)}}" class="btn btn-danger text-light"><i class="fa fa-times"></i> Cancel </a>
                            @endif
                            <a class="btn btn-info text-light" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- invoice end-->
        </section>
    </section>
@endsection

