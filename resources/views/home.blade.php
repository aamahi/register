@extends('layouts.app')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <div class="row state-overview">
                <div class="col-lg-3 col-sm-6">
                    <section class="card">
                        <div class="symbol terques">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="value">
                            <h1>
                                {{$total_user}}
                            </h1>
                            <p>Total User</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="card">
                        <div class="symbol red">
                            <i class="fa fa-tags"></i>
                        </div>
                        <div class="value">
                            <h1>5</h1>
                            <p>Today Sales</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="card">
                        <div class="symbol yellow">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="value">
                            <h1 class=" count3">
                                5
                            </h1>
                            <p>New Order</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="card">
                        <div class="symbol blue">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="value">
                            <h1 class=" count4">
                                0
                            </h1>
                            <p>Total Profit</p>
                        </div>
                    </section>
                </div>
            </div>
            <!--state overview end-->
            <div class="row">
                <div class="col-lg-4">
                    <!--user info table start-->
                    <section class="card">
                        <div class="card-body">
                            <a href="#" class="task-thumb">
                                <img src="{{asset('admin/img/avatar1.jpg')}}" alt="">
                            </a>
                            <div class="task-thumb-details">
                                <h1><a href="#">{{Auth::user()->name}}</a></h1>
                                <p>{{Auth::user()->email}}</p>
                            </div>
                        </div>
                        <table class="table table-hover personal-task">
                            <tbody>
                            <tr>
                                <td>
                                    <i class=" fa fa-tasks"></i>
                                </td>
                                <td>New Task Issued</td>
                                <td> 02</td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-exclamation-triangle"></i>
                                </td>
                                <td>Task Pending</td>
                                <td> 14</td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-envelope"></i>
                                </td>
                                <td>Inbox</td>
                                <td> 45</td>
                            </tr>
                            <tr>
                                <td>
                                    <i class=" fa fa-bell-o"></i>
                                </td>
                                <td>New Notification</td>
                                <td> 09</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                    <!--user info table end-->
                </div>
                <div class="col-lg-8">
                    <!--work progress start-->
                    <section class="card">
                        <div class="card-body progress-card">
                            <div class="task-progress">
                                <h1>Admin</h1>
                            </div>
                            <div class="task-option">
                               <p>{{Auth::User()->name}}</p>
                            </div>
                        </div>
                        <table class="table table-hover personal-task">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created at</th>
                            </tr>
                            <tbody>
                            @foreach($all_user as $user)
                                @if($user->rule==0)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-success">{{$user->created_at->diffForHumans()}}</span>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                        {{$all_user->links()}}
                    </section>
                    <!--work progress end-->
                </div>
            </div>

        </section>
    </section>
@endsection
