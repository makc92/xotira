<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- title -->
    <title>@yield('page_title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="ITPark">
    <!-- description -->
    <meta name="description" content="Қатағон қурбонлари портали">
    <!-- keywords -->
    <meta name="keywords" content="Қатағон қурбонлари портали">
    <!-- favicon -->
{{-- <link rel="shortcut icon" href="images/favicon.png">
 <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
 <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
 <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">--}}
<!-- animation -->
    <link rel="stylesheet" href="{{asset('./css/libs.css')}}"/>
    <link rel="stylesheet" href="{{asset('./css/main.css')}}"/>
    @yield('page_styles')
    <!--[if IE]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
@include('blocks.header')
<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image: url('{{asset('./images/main2.jpg')}}');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                <!-- start page title -->
                <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Янгиликлар</h1>
                <!-- end page title -->
            </div>
        </div>
    </div>
</section>
@yield('page_content')

<!-- start footer -->
<footer class="footer-strip-dark bg-extra-dark-gray padding-50px-tb sm-padding-30px-tb">
    <div class="container">
        <div class="row align-items-center">
            <!-- start logo -->
            <div class="col-md-3 text-center text-lg-left sm-margin-20px-bottom">
                <a href="javascript:void(0);"><img class="footer-logo" src="images/logo.jpg" alt="Logo" width="100"></a>
            </div>
            <!-- end logo -->
            <!-- start copyright -->
            <div class="col-md-6 text-center text-small alt-font sm-margin-10px-bottom text-white">
                &copy; 2020
            </div>
            <!-- end copyright -->
            <!-- start social media -->
            <div class="col-md-3 text-center text-lg-right">
                <div class="social-icon-style-8 d-inline-block vertical-align-middle">
                    <ul class="small-icon mb-0">
                        <li><a class="facebook text-white-2" href="https://www.facebook.com/" target="_blank"><i
                                    class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a class="twitter text-white-2" href="https://twitter.com/" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a class="google text-white-2" href="https://plus.google.com" target="_blank"><i
                                    class="fab fa-google-plus-g"></i></a></li>
                        <li><a class="instagram text-white-2" href="https://instagram.com/" target="_blank"><i
                                    class="fab fa-instagram mr-0" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end social media -->
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript libraries -->
@yield('page_scripts')
<script type="text/javascript" src="{{asset('./js/main.js')}}"></script>
</body>

</html>
