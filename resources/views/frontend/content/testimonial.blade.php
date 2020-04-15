<div class="testmonial-area testmonial-area2 bg-img-2 black-opacity">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="test-title text-center">
                    <h2>What Our client Says</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1 col-12">
                <div class="testmonial-active owl-carousel">
                    @foreach($testimonials as $testimonial)
                    <div class="test-items test-items2">
                        <div class="test-content">
                            <p> {{$testimonial->message}} </p>
                            <h2>{{$testimonial->clint_name}}</h2>
                            <p>{{$testimonial->position}}</p>
                        </div>
                        <div class="test-img2">
                            <img src="{{asset('Uploads/Testimonial/'.$testimonial->photo)}}" class="rounded-circle" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
