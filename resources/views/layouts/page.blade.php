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
    <meta name="description" content="{{__('main.head-title')}}">
    <!-- keywords -->
    <meta name="keywords" content="{{__('main.head-title')}}">
    <link rel="stylesheet" href="{{asset('./css/libs.css')}}"/>
    <link rel="stylesheet" href="{{asset('./css/main.css')}}"/>
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
    @yield('page_styles')
    {{--<script src="js/html5shiv.js"></script>--}}
    <!--[if IE]>
    <![endif]-->
</head>

<body class="front">
<!-- start header -->
<header class="header-with-topbar" style="height: 108px">
    <!-- topbar -->
    <div class="top-header-area bg-header-blue padding-10px-tb">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-6 d-flex align-items-center  justify-content-center justify-content-md-start">
                    <div id="specialcontainer">
                        <a href="#" id="menutoggle" class="special-button"><i class="far fa-eye"></i> <span class="sm-display-none">{{__('buttons.special')}}</span> </a>
                        <div id="specialcontent">
                            <div class="row no-gutters justify-content-between">
                                <div class="col-6 text-center">
                                    <span class="filter" data-filter="default">A</span>
                                </div>
                                <div class="col-6 text-center">
                                    <span class="filter" data-filter="black">A</span>
                                </div>
                                <div class="col-12">
                                    <input type="range" min="16" max="30" value="0" id="fontSize"  />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-searchbar">
                        <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                        <!-- search input-->
                        <form id="search-header" method="post" action="{{route('search', app()->getLocale())}}" name="search-header" class="mfp-hide search-form-result">
                            <div class="search-block d-flex">
                                <div class="w-100 d-flex">
                                    <input class="search-input" type="text" name="q" placeholder="{{__('form.search-text')}}" value="">
                                    <select name="model" id="model" class="w-30 search-select">
                                        <option value="news">{{__('menu.news')}}</option>
                                        <option value="achievement">{{__('menu.achievement')}}</option>
                                        <option value="memory">{{__('menu.memory')}}</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary searchBtn-v" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 text-uppercase alt-font d-flex align-items-center justify-content-center justify-content-md-end">
                    @yield('page_lang')
                </div>
            </div>
        </div>
    </div>
    <!-- end topbar -->
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-top header-light-transparent background-transparent nav-box-width navbar-expand-lg">
        <div class="container nav-header-container">
            <div class="col-auto">
                <a href="{{route('main', app()->getLocale())}}" class="logo">
                    <img src="{{asset('images/logo_svg_menu.png')}}" alt="" class="default">
                </a>
            </div>
            <div class="col-auto col-lg accordion-menu">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-between" id="navbar-collapse-toggle-1">
                    <ul class="nav navbar-nav alt-font font-weight-700 w-100 justify-content-around">
                        <li class="dropdown simple-dropdown">
                            <a href="javascript:void(0);">{{__('menu.press-service')}}</a>
                            <i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu" role="menu" style="top: 72px; display: none; opacity: 1;">
                                <li class="dropdown">
                                    <a class="inner-link" href="{{route('news', app()->getLocale())}}">{{__('menu.news')}}</a>
                                    <a class="inner-link" href="{{route('anouncments', app()->getLocale())}}">{{__('menu.announcements')}}</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('memory', app()->getLocale())}}" title="{{__('menu.memory')}}" class="inner-link">{{__('menu.memory')}}</a></li>
                        <li><a href="{{route('achievements', app()->getLocale())}}" title="{{__('menu.achievement')}}" class="inner-link">{{__('menu.achievement')}}</a></li>
                        <li class="dropdown simple-dropdown">
                            <a href="javascript:void(0);">{{__('menu.museum')}}</a>
                            <i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu" role="menu" style="top: 72px; display: none; opacity: 1;">
                                <li class="dropdown">
                                    <a class="inner-link"
                                       href="{{route('museum.main', app()->getLocale())}}#museum">{{__('menu.about_museum')}}</a>
                                    <a class="inner-link"
                                       href="{{route('museum.main', app()->getLocale())}}#regional">{{__('menu.regional')}}</a>
                                    <a class="inner-link"
                                       href="{{route('museum.main', app()->getLocale())}}#exposition">{{__('menu.exposition')}}</a>
                                    <a class="inner-link"
                                       href="{{route('museum.main', app()->getLocale())}}#teams">{{__('menu.administration')}}</a>
                                    <a class="inner-link"
                                       href="{{route('museum.main', app()->getLocale())}}#services">{{__('menu.services')}}</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('library', app()->getLocale())}}" title="{{__('menu.library')}}" class="inner-link">{{__('menu.library')}}</a></li>
                        <li class="dropdown simple-dropdown">
                            <a href="javascript:void(0);">{{__('menu.media')}}</a>
                            <i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu" role="menu" style="top: 72px; display: none; opacity: 1;">
                                <li class="dropdown">
                                    <a class="inner-link" href="{{route('photos', app()->getLocale())}}#photo">{{__('menu.photo')}}</a>
                                    <a class="inner-link" href="{{route('photos', app()->getLocale())}}#video">{{__('menu.video')}}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
    <!-- end navigation -->
</header>

@yield('page_content')

@include('blocks.footer')
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript libraries -->
<script type="text/javascript" src="{{asset('./js/main.js')}}"></script>
@yield('page_scripts')
</body>

</html>
