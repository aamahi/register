@extends('layouts.app')
@section('content')

    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-md-12">
                    <section class="card">
                        <header class="card-header">
                            Subject : @if($contact_message->subject){{$contact_message->subject}}@else No Subject Found @endif
                        </header>

                        <div class="card-body">
                            <p>
                                {{$contact_message->message}}
                            </p>
                            <br/>
                            <ul class="nav nav-pills nav-stacked labels-info ">
                                <li><i class=" fa fa-user text-danger"></i> Name : {{$contact_message->name}}</p></li>
                            </ul>
                            <ul class="nav nav-pills nav-stacked labels-info ">
                                <li><i class=" fa fa-envelope text-danger"></i> Email : {{$contact_message->email}}</p></li>
                            </ul>
                            <br/>
                            <div class="">
                                <a href="{{route('admin.contact')}}" class="btn btn-sm btn-primary"> <i class=" fa fa-reply"></i> Reply </a>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
@endsection
