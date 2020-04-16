@extends('layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-info text-center text-light">
                               Category List
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Category Name</th>
{{--                                            <th scope="col">Author Name</th>--}}
                                            <th scope="col">Created</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($deleted_category as $category)
                                        <tr>
                                            <th> <img width="175" src="{{asset('Uploads/Category/'.$category->category_image)}}"> </th>
                                            <td>{{$category->category_name}}</td>
{{--                                            <td>{{\App\User::find(($category->author_id))->name}}</td>--}}
                                            <td>@if($category->created_at)
                                                    {{$category->deleted_at->format("jS F, Y")}}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('restore_category',$category->id)}}" class="btn btn-info btn-md"> <i class="fa fa-reply"> </i> Restore</a>
                                                <a href="{{route('deletd_category',$category->id)}}" class="btn btn-danger btn-md delete"> <i class="fa fa-trash-o"> </i> Deleted</a>
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
