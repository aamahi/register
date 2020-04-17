@extends('layouts.app')
@section('name')
    Write Blog
@endsection

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-7">
                    <section class="card">
                        <header class="card-header">
                            Teastimonial List
                        </header>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blog_list as $blog)
                                <tr>
                                    <td><img width="90" src="{{asset('Uploads/Blog/'.$blog->photo)}}"></td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{\App\User::find(($blog->author_id))->name}}</td>
                                    <td>
                                        <a href="" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                                        <a href="{{route('delete_testimonial',$blog->id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
                <div class="col-sm-5">

                    <section class="card">
                        <header class="card-header no-border">
                            Write Blog
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
                            <form action="{{route('admin.blog')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden"  name="author_id" value="{{Auth::user()->id}}" >
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="message">Post Details</label>
                                    <textarea class="form-control" id="message" name="details" value="{{old('message')}}" rows="5">Blog Details</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Thumbnial Image</label>
                                    <input type="file" class="form-control" id="photo" name="photo">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Write Blog</button>
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

@section('content')
    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Blog Page</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- blog-area start -->
    <div class="blog-area">
        <div class="container">
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Latest News</h2>
                    <img src="assets/images/section-title.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4  col-md-6 col-12">
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <img src="assets/images/blog/1.jpg" alt="">
                            <ul>
                                <li>20</li>
                                <li>Janu</li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> 25/06/2019</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">British military courts use aginst protesters busines cultural...</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <img src="assets/images/blog/2.jpg" alt="">
                            <ul>
                                <li>20</li>
                                <li>Janu</li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> 14/06/2019</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-gallary.html">South korea’s moon jae in sworn vowing to address north...</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <img src="assets/images/blog/3.jpg" alt="">
                            <ul>
                                <li>25</li>
                                <li>Jun</li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> 25/06/2019</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Man looking at his note remember to daily tasks...</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <img src="assets/images/blog/8.jpg" alt="">
                            <ul>
                                <li>15</li>
                                <li>April</li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> 25/06/2019</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-video.html">Robots helped inspire and deep learning might become...</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <img src="assets/images/blog/9.jpg" alt="">
                            <ul>
                                <li>25</li>
                                <li>May</li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> 25/06/2019</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Defying the traditional and mainstream parties...</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <img src="assets/images/blog/12.jpg" alt="">
                            <ul>
                                <li>01</li>
                                <li>Feb</li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> 25/06/2019</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-audio.html">Packing macron anddis insted about vote against chat...</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="pagination-wrapper text-center mb-30">
                        <ul class="page-numbers">
                            <li><a class="prev page-numbers" href="#"><i class="fa fa-arrow-left"></i></a></li>
                            <li><span class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="next page-numbers" href="#"><i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area end -->
@endsection
