<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- title -->
    <title>Қатағон қурбонлари портали</title>
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
    <!--[if IE]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
@include('front.pages.main.blocks.header')

@include('front.pages.main.blocks.main')

@include('front.pages.main.blocks.news')

@include('front.pages.main.blocks.book')

@include('front.pages.main.blocks.achievements')
@include('front.pages.main.blocks.museum')

@include('front.pages.main.blocks.library')
@include('front.pages.main.blocks.gallery')

@include('front.pages.main.blocks.form')
@include('front.pages.main.blocks.3d')
@include('blocks.footer')
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="fas fa-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript libraries -->
<script type="text/javascript" src="{{asset('./js/main.js')}}"></script>
</body>

</html>
