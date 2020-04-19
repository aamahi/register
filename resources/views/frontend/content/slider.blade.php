<div class="slider-area">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
                <div class="swiper-slide overlay">
                <div class="single-slider slide-inner" style="background: url({{asset('Uploads/Banner/'.$slider->photo)}});">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-lg-9 col-12">
                                <div class="slider-content">
                                    <div class="slider-shape">
                                        <h2 data-swiper-parallax="-500">{{$slider->banner_title}}</h2>
                                        <p data-swiper-parallax="-400">{{$slider->description}}</p>
                                        <a href="shop.html" data-swiper-parallax="-300">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
