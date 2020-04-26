@extends('layouts.app')
@section('name')
    Testimonial
@endsection

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-8">
                    <section class="card">
                        <header class="card-header">
                          Cupon
                        </header>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Cupon Name</th>
                                <th>Discont (%)</th>
                                <th>Expair Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cupons as $cupon)
                            <tr>
                                <td>{{$cupon->cupon_name}}</td>
                                <td>{{$cupon->discount}} %</td>
                                <td>{{$cupon->validity_till}}</td>

                                <td>@if($cupon->validity_till<=(\Carbon\Carbon::now()->format('Y-m-d')))
                                        <span class="badge badge-danger">Not Valid</span>
                                    @else
                                        <span class="badge badge-success">Valid</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('delete_cupon',$cupon->id)}}" class="btn btn-danger delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
                <div class="col-sm-4">

                    <section class="card">
                        <header class="card-header no-border">
                            Add Clint Descripting
                        </header>
                        <div class="card-body">
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
                            <form action="{{route('cupon')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="cupon_name">Cupon Name</label>
                                    <input type="text" class="form-control" id="clint_name" name="cupon_name" value="{{old('cupon_name')}}" placeholder="Cupon Name">
                                </div>
                                <div class="form-group">
                                    <label for="discount">Discount (%) </label>
                                    <input type="number" class="form-control" id="discount" name="discount" value="{{old('discount')}}" placeholder="Discount %">
                                </div>
                                <div class="form-group">
                                    <label for="validity_till">Validity till </label>
                                    <input type="date" class="form-control" id="validity_till" min="{{\Carbon\Carbon::now()->format('Y-m-d')}}" name="validity_till" value="{{old('validity_till')}}" placeholder="validity till">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Add Cupon</button>
                                </div>
                            </form>
                        </div>

                    </section>
                </div>
            </div
            <!-- page end-->
        </section>
    </section>
@endsection

