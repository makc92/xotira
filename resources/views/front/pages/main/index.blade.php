<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- title -->
    <title>{{__('main.head-title')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="ITPark">
    <!-- description -->
    <meta name="description" content="{{__('main.head-title')}}">
    <!-- keywords -->
    <meta name="keywords" content="{{__('main.head-title')}}">
    <link rel="stylesheet" href="{{asset('./css/libs.css')}}"/>
    <link rel="stylesheet" href="{{asset('./css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('./css/pace.css')}}">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(76570066, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/76570066" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!--[if IE]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>

<body class="main-page">
<div class="paceDiv">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>

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
@include('front.pages.main.blocks.partners')
@include('blocks.footer')
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="fas fa-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript libraries -->
<script type="text/javascript" src="{{asset('./js/pace.js')}}"></script>
<script type="text/javascript" src="{{asset('./js/main.js')}}"></script>
<script>
    Pace.options.ajax = false;
    Pace.on("start", function () {
        $(".paceDiv").show();
    });

    Pace.on("done", function () {
        $(".paceDiv").fadeOut(1000);
    });

</script>
</body>

</html>
