@extends('frontend.layout.index')
@section('content')
    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Blog Details</h2>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><span>Blog Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- blog-details-area start-->
    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="blog-details-wrap">
                        <img src="{{asset('Uploads/Blog/'.$blog_details->photo)}}" alt="">
                        <h3>{{$blog_details->title}}</h3>
                        <ul class="meta">
                            <li>{{$blog_details->created_at->format("j M, Y")}}</li>
                            <li>{{(\App\User::find($blog_details->author_id))->name}}</li>
                        </ul>
                        <p>{{$blog_details->details}}</p>
                        <div class="share-wrap">
                            <div class="row">
                                <div class="col-sm-7 ">
                                    <ul class="socil-icon d-flex">
                                        <li>share it on :</li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-5 text-right">
                                    <a href="{{route('blog_details',($blog_details->id)+1)}}">Next Post <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form-area">
                        <div class="comment-main">
                            <h3 class="blog-title"><span> (3) </span>Comments:</h3>
                            <ol class="comments">
                                <li class="comment even thread-even depth-1">
                                    @forelse($blog_details->comments as $comment)
                                        <div class="comment-wrap">
                                            <div class="comment-theme">
                                                <div class="comment-image">
                                                    <img src="{{asset('comment.png')}}" alt="Jhon" width="60">
                                                </div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="sewl-comments-meta">
                                                        <h4>{{$comment->name }}</h4>
                                                        <span>{{$comment->created_at->diffForHumans()}}</span>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>{{$comment->comment}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        NO Comment Found
                                    @endforelse
                                </li>
                            </ol>
                        </div>
                        <div id="respond" class="sewl-comment-form comment-respond form-style">
                            <h3 id="reply-title" class="blog-title">Leave a <span>comment</span></h3>
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

                            <form method="post" class="comment-form" action="{{url('/comment')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="sewl-form-inputs no-padding-left">
                                            <div class="row">
                                                <input type="hidden" name="post_id" value="{{$blog_details->id}}">
                                                <div class="col-sm-6 col-12">
                                                    <input id="name" name="name" value="" tabindex="2" placeholder="Name" type="text">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <input id="email" name="email" value="" tabindex="3" placeholder="Email" type="email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="sewl-form-textarea no-padding-right">
                                            <textarea id="comment" name="comment" tabindex="4" rows="3" cols="30" placeholder="Write Your Comments..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-submit">
                                            <input name="submit"  value="Send" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="#">{{$category->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_recent_entries recent_post">
                            <h4 class="widget-title">Recent Post</h4>
                            <ul>
                                @foreach($blogs as $blog)
                                    <li>
                                    <div class="post-img">
                                        <img src="{{asset('Uploads/Blog/'.$blog->photo)}}" width="60" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{route('blog_details',$blog->id)}}">{{$blog->title}}</a>
                                        <p>{{$blog->created_at->format("j M, Y")}}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-details-area end -->
@endsection
