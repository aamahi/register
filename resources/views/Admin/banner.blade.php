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
                           Teastimonial List
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
                            @foreach($all_banner as $banner)
                            <tr>
                                <td><img width="50" src="{{asset('Uploads/Banner/'.$banner->photo)}}"></td>
                                <td>{{$banner->banner_title}}</td>
                                <td>{{Str::limit($banner->description,39)}}</td>
                                <td>
                                    <a href="" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                                    <a href="{{route('delete_banner',$banner->id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
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
                            <form action="{{route('admin.banner')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="banner_title">Title</label>
                                    <input type="text" class="form-control" id="banner_title" name="banner_title" value="{{old('banner_title')}}" placeholder="Banner Title">
                                </div>
                                <div class="form-group">
                                    <label for="description">Banner Discription</label>
                                    <textarea class="form-control" id="description" name="description" value="{{old('description')}}" rows="3">Enter banner description</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Banner Image</label>
                                    <input type="file" class="form-control" id="photo" name="photo">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Add Banner </button>
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

