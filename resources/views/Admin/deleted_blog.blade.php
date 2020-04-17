@extends('layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-info text-center text-light">
                               Blog List
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Blog Title</th>
                                            <th scope="col">Deleted</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($deleted_blog as $blog)
                                        <tr>
                                            <th> <img width="115" src="{{asset('Uploads/Blog/'.$blog->photo)}}"> </th>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->deleted_at->format("d F, Y")}} </td>
                                            <td>
                                                <a href="{{route('restore_blog',$blog->id)}}" class="btn btn-info btn-md"> <i class="fa fa-reply"> </i> Restore</a>
                                                <a href="{{route('delete_blog_lifetime',$blog->id)}}" class="btn btn-danger btn-md delete"> <i class="fa fa-trash-o"> </i> Deleted</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
