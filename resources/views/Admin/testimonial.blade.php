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
                            Hover Table
                        </header>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sumon</td>
                                <td>Mosa</td>
                                <td>@twitter</td>
                            </tr>
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
                            <form action="testimonial" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="clint_name">Clint Name</label>
                                    <input type="text" class="form-control" id="clint_name" name="clint_name" value="{{old('clint_name')}}" placeholder="Clint Name">
                                </div>
                                <div class="form-group">
                                    <label for="postion">Position</label>
                                    <input type="text" class="form-control" id="postion" name="position" value="{{old('position')}}" placeholder="Enter Position">
                                </div>
                                <div class="form-group">
                                    <label for="message">Clint Message</label>
                                    <textarea class="form-control" id="message" name="message" value="{{old('message')}}" rows="3">Enter Clint Message</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Clint Image</label>
                                    <input type="file" class="form-control" id="photo" name="photo">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Add Testimonial</button>
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

