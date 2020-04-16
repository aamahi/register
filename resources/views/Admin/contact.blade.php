@extends('layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-8">
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
                                        @foreach($all_category as $category)
                                        <tr>
                                            <th> <img width="175" src="{{asset('Uploads/Category/'.$category->category_image)}}"> </th>
                                            <td>{{$category->category_name}}</td>
{{--                                            <td>{{\App\User::find(($category->author_id))->name}}</td>--}}
                                            <td>@if($category->created_at)
                                                    {{$category->created_at->format("jS F, Y")}}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-success btn-md"> <i class="fa fa-eye"> </i> </a>
                                                <a href="{{route('update_category',$category->id)}}" class="btn btn-info btn-md"> <i class="fa fa-pencil"> </i> </a>
                                                <a href="{{route('temporary_delete_category',$category->id)}}" class="btn btn-danger btn-md delete"> <i class="fa fa-trash-o"> </i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-info text-light text-center">
                                Add Category
                            </div>
                            <div class="card-body">
                                <form action="{{route('category')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="author_id" value="{{Auth::user()->id}}">
                                    <div class="form-group">
                                        <label for="add_category">Add Category</label>
                                        <input type="text" class="form-control" id="add_category" name="add_category"  placeholder="Add Category">
                                        @error('add_category')
                                            <br>
                                            <p class="text-danger"><i class="fa fa-warning"></i>{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="category_image">Category Image</label>
                                        <input type="file" class="form-control" id="category_image" name="category_image" >
                                        @error('category_image')
                                            <br>
                                            <p class="text-danger"><i class="fa fa-warning"></i>{{$message}}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Category</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

