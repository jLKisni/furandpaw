<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset("img/furpawlogo.png") }}">
    <link rel="stylesheet" href="{{ asset("css/mainstyle.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/hover-min.css") }}" media="all">
    <link rel="stylesheet" href="{{ asset("css/animate.css") }}">
    @stack('head-css')
    <title>FurAndPaws-@yield('title')</title>
</head>

<body>

@include('pages.home.login-modal')

<a href="#" class="scroll_to_top hvr-grow" id="scroll"><span class="fa fa-angle-up fa-2x"></span></a>

@include('pages.home.small-header')

@include('pages.home.nav')

@yield('content')

<footer>
    <div class="copyright_wrap">
        <center><p>Fur and Paws &copy; 2016 All Rights Reserved <a href="#">Terms of Use</a> and <a href="#">Privacy
                    Policy</a></p></center>
        <center>
            <div class="login_social_list">
                <ul>
                    <li><a href="#" class="hvr-wobble-vertical"><img src="{{ asset("img/icon/social/facebook.ico") }}"
                                                                     class="icon-circle"></a></li>
                    <li><a href="#" class="hvr-wobble-vertical"><img src="{{ asset("img/icon/social/twitter.ico") }}"
                                                                     class="icon-circle"></a></li>
                    <li><a href="#" class="hvr-wobble-vertical"><img src="{{ asset("img/icon/social/instagram.ico") }}"
                                                                     class="icon-circle"></a></li>
                    <li><a href="#" class="hvr-wobble-vertical"><img
                                    src="{{ asset("img/icon/social/google_plus.ico") }}" class="icon-circle"></a></li>
                </ul>
            </div>
        </center>
    </div>
</footer>

<!-- Bootstrap And Core JavaScript
  ================================================== -->
<script type="text/javascript" src="{{ asset("js/jquery.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/bootstrap.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/loginmodal.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/custom-scroll.js") }}"></script>
@stack('body-bottom-scripts')
</body>
</html>
