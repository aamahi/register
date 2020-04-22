@extends('layouts.app')
@section('content')
    <section id="main-content">
         <section class="wrapper">
             <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-light text-center">
                            Add Product
                        </div>
                        <div class="card-body">
                            <form action="{{route('add_product')}}" method="post" enctype="multipart/form-data">
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
                                    <label for="product_name">Product Name</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name"  value="{{old('product_name')}}">
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category_id">
                                        <option selected disabled>Seletct Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" id="price" name="price"  value="{{old('price')}}">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity"  value="{{old('quantity')}}">
                                </div>
                                <div class="form-group">
                                    <label for="decription">Decription</label>
                                    <textarea class="form-control" id="decription" name="decription" rows="3">Enter Product Decription</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input type="file" class="form-control" id="photo" name="photo">
                                </div>
                                <div class="form-group">
                                    <label for="multiple_photo">Multiple Photo</label>
                                    <input type="file" class="form-control" id="multiple_photo" name="multiple_photo[]" multiple>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </section>

@endsection
