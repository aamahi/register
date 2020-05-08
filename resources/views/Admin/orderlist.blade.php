@extends('layouts.app')
@section('name')
   Order List
@endsection

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header">
                          Order List
                        </header>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Customar Name</th>
                                <th>Address</th>
                                <th>Payment</th>
                                <th>Taka</th>
                                <th>Order Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->name}}</td>
                                <td>{{$order->address}}</td>
                                <td>@if($order->payment==1)
                                        <span class="badge badge-primary">Cash on Delivary</span>
                                    @else
                                        <span class="badge badge-success">Online Payment</span>
                                    @endif
                                </td>
                                <td>{{$order->total}} taka </td>
                                <td>{{$order->created_at->format('d/m/Y')}}</td>
                                <td>@if($order->status==0)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($order->status==1)
                                        <span class="badge badge-success">Done</span>
                                    @else
                                        <span class="badge badge-danger">Cancel</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('view_order',$order->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('delete_order',$order->id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
@endsection

