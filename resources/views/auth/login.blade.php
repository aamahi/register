
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Inventory </title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />

    <meta name="keywords" content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="{{asset('auth/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{asset('auth/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
          rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
<div class="main-bg">
    <!-- title -->
    <h1>INVENTORY SYSTEM</h1>
    <!-- //title -->
    <div class="sub-main-w3">
        <div class="image-style">

        </div>
        <!-- vertical tabs -->
        <div class="vertical-tab">

            <div id="section1" class="section-w3ls">
                {{--                <a href="">--}}
                <input type="radio" name="sections" id="option1" checked>
                <label for="option1" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>Login</label>
                {{--                </a>--}}
                <article>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <h3 class="legend">Login Here</h3>
                        <div class="input">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            <input type="email" placeholder="Email" name="email" required />
                        </div>
                        <div class="input">
                            <span class="fa fa-key" aria-hidden="true"></span>
                            <input type="password" placeholder="Password" name="password" required />
                        </div>
                        <button type="submit" class="btn submit">Login</button>
                        <a href="{{URL('password/reset')}}" class="bottom-text-w3ls">Forgot Password?</a>
                    </form>
                </article>
            </div>


            <div id="section2" class="section-w3ls">
                <input type="radio" name="sections" id="option2">
                <label for="option2" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>Register</label>
                <article>
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        {{--                        <h3 class="legend">Register Here</h3>--}}
                        <div class="input">
                            <span class="fa fa-user-o" aria-hidden="true"></span>
                            <input type="text" placeholder="Name" name="name" required />
                        </div>
                        <div class="input">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            <input type="email" placeholder="Email" name="email" required />
                        </div>
                        <div class="input">
                            <span class="fa fa-key" aria-hidden="true"></span>
                            <input type="password" placeholder="Password" name="password" required />
                        </div>
                        <div class="input">
                            <span class="fa fa-key" aria-hidden="true"></span>
                            <input type="password" placeholder="Confirm Password" name="password_confirmation" required />
                        </div>
                        <button type="submit" class="btn submit">Register</button>
                    </form>
                </article>
            </div>
            <div id="section3" class="section-w3ls">
                <input type="radio" name="sections" id="option3">
                <label for="option3" class="icon-left-w3pvt"><span class="fa fa-lock" aria-hidden="true"></span>Forgot Password?</label>
                <article>
                    <form action="#" method="post">
                        <h3 class="legend last">Reset Password</h3>
                        <p class="para-style">Enter your email address below and we'll send you an email with instructions.</p>
                        <p class="para-style-2"><strong>Need Help?</strong> Learn more about how to <a href="#">retrieve an existing
                                account.</a></p>
                        <div class="input">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            <input type="email" placeholder="Email" name="email" required />
                        </div>
                        <button type="submit" class="btn submit last-btn">Reset</button>
                    </form>
                </article>
            </div>
        </div>
        <!-- //vertical tabs -->
        <div class="clear"></div>
    </div>
    <!-- copyright -->
    <div class="copyright">
        <h2>&copy; 2019 Triple Forms. All rights reserved | Design by
            <a href="http://w3layouts.com" target="_blank">W3layouts</a>
        </h2>
    </div>
    <!-- //copyright -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<script>
        @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
</body>

</html>
