@extends('layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-info text-center text-light">
                               All Contact Message
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Send Message</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($all_message as $message)
                                        <tr>
                                            <td>{{$message->id}}</td>
                                            <td>{{$message->name}}</td>
                                            <td>{{$message->email}}</td>
                                            <td>@if($message->created_at)
                                                    {{$message->created_at->diffForHumans()}}
                                                @else
                                                    N/A
                                                @endif
                                            </td>

                                            <td>
                                                @if($message->status !=1)
                                                    <a href="{{route('show_contact_message',$message->id)}}" class="btn btn-warning btn-md"></i> Mark as Read </a>
                                                @else
                                                    <a href="{{route('show_contact_message',$message->id)}}" class="btn btn-success btn-md"> <i class="fa fa-eye"> </i> Read </a>
                                                    <a href="{{route('delete_contact_message',$message->id)}}" class="btn btn-danger btn-md delete"> </i> Delete</a>
                                                @endif
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

