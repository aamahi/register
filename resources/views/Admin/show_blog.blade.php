@extends('layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="card">
                <header class="card-header">
                    {{$blog->title}}
                </header>

            </section>
            <div class="row">
                <div class="col-md-8">
                    <section class="card">
                        <img src="{{asset('Uploads/Blog/'.$blog->photo)}}">
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="card">
                        <header class="card-header">
                            Blog Description
                        </header>

                        <div class="card-body">
                            <p>
                                {{$blog->details}}
                            </p>
                            <br/>
                            <ul class="list-unstyled p-files">
                                <li><a href="#"><i class="fa fa-user"></i> {{\App\User::find($blog->author_id)->name}}</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> {{$blog->created_at->diffForHumans()}}</a></li>
                            </ul>
                            <br/>


                            <div class="text-center mtop20">
                                <a href="{{route('admin.blog')}}" class="btn btn-sm btn-primary"><i class="fa fa-reply"></i> Back</a>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section class="card">
                        <header class="card-header">
                            Comment
                        </header>
                        <div class="card-body">
                            <table class="table table-hover p-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Commnets</th>
                                    <th>Send</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($blog->comments as $comment)
                                    <tr>
                                        <td>
                                            {{$comment->name}}
                                        </td>
                                        <td>
                                            @if($comment->email)
                                                {{$comment->email}}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                           {{$comment->created_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            {{$comment->comment}}
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Completed</span>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="text-center">
                                        <td colspan="30">NO Comment</td>
                                    </tr>

                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
@endsection
