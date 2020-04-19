@extends('layouts.app')
@section('name')
    Testimonial
@endsection

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header">
                           Deletd Slider
                        </header>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($delete_slider as $slider)
                            <tr>
                                <td><img width="50" src="{{asset('Uploads/Banner/'.$slider->photo)}}"></td>
                                <td>{{$slider->banner_title}}</td>
                                <td>{{Str::limit($slider->description,39)}}</td>
                                <td>
                                    <a href="{{route('restore_banner',$slider->id)}}" class="btn btn-info"> <i class="fa fa-reply"></i> </a>
                                    <a href="{{route('d_slider',$slider->id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
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

