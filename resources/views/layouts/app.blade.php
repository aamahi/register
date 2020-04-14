@include('layouts.content.head')
<section id="container">
    <!--header start-->
    @include('layouts.content.header')
    <!--header end-->
    <!--sidebar start-->
    @include('layouts.content.sidebar')
    <!--sidebar end-->
    <!--main content start-->
        @yield('content')
    <!--main content end-->

    <!--footer start-->
    @include('layouts.content.footer')
    <!--footer end-->
</section>
@include('layouts.content.jsfile')
