@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header bg-primary text-center">
                        Update Category
                    </div>
                    <div class="card-body">
                        <form action="{{URL('/update/category/{id}')}}" method="post">
                            @csrf
                            @error('add_category')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$message}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @enderror
                            <div class="form-group">
                                <input type="hidden"  name="id"  value="{{$update_category->id}}">
                                <label for="add_category">Category Name</label>
                                <input type="text" class="form-control" id="add_category" name="add_category"  value="{{$update_category->category_name}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
