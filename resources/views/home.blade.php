@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-success"> <h2 class="text-center"> Wellcome to {{Auth::user()->name}} </h2> </div>

                <div class="card-body">
{{--                    {{Auth::user()}}--}}
                    <table class="table table-bordered">
{{--                        <h3 class="text-center text-info">User List of : {{Auth::user()->count()}}</h3>--}}
                        <h3 class="text-center text-info">User List of : {{$total_user}}</h3>
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created User</th>
                            <th scope="col">kmon age created </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_user as $user)
                            <tr>
                                <th>{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->format("jS F, Y")}}</td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                            </tr>
                         @endforeach
                        </tbody>
                    </table>
                    {{$all_user->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
