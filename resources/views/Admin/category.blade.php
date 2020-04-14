@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header bg-success text-center">
                       Category List
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Author Name</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_category as $category)
                                <tr>
                                    <th>{{$category->id}}</th>
                                    <td>{{$category->category_name}}</td>
                                    <td>{{\App\User::find(($category->author_id))->name}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-md"> <i class="fa fa-eye"> </i> </a>
                                        <a href="{{route('update_category',$category->id)}}" class="btn btn-info btn-md"> <i class="fa fa-pencil"> </i> </a>
                                        <a href="" class="btn btn-danger btn-md"> <i class="fa fa-trash"> </i> </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        {{$all_category->links()}}
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header bg-primary text-center">
                        Add Category
                    </div>
                    <div class="card-body">
                        <form action="{{route('category')}}" method="post">
                            @csrf
                            <input type="hidden" name="author_id" value="{{Auth::user()->id}}">
                            <div class="form-group">
                                <label for="add_category">Add Category</label>
                                <input type="text" class="form-control" id="add_category" name="add_category"  placeholder="Add Category">
                            </div>
                            @error('add_category')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$message}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
