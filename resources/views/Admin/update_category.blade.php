@extends('layouts.app')
@section('content')
    <section id="main-content">
         <section class="wrapper">
             <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header bg-light text-center">
                            Update Category
                        </div>
                        <div class="card-body">
                            <form action="{{url('update_category/'.$update_category->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
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
                                <div class="form-group">
{{--                                    <input type="hidden"  name="id"  value="{{$update_category->id}}">--}}
                                    <label for="add_category">Category Name</label>
                                    <input type="text" class="form-control" id="add_category" name="add_category"  value="{{$update_category->category_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="add_category">Category Old Image</label>
                                    <br/>
                                    <img src="{{asset('Uploads/Category/'.$update_category->category_image)}}">
                                </div>
                                <div class="form-group">
                                    <label for="category_image">Update Category Image</label>
                                    <input type="file" class="form-control" id="category_image" name="category_image">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </section>

@endsection
