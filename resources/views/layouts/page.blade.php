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
    {{--<script src="js/html5shiv.js"></script>--}}
    <!--[if IE]>
    <![endif]-->
</head>

<body class="front">
<!-- start header -->
<header class="header-with-topbar" style="height: 108px">
    <!-- topbar -->
    <div class="top-header-area bg-black padding-10px-tb">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-6">
                    <div id="specialcontainer">
                        <a href="#" id="menutoggle" class="special-button"><i class="far fa-eye"></i> {{__('buttons.special')}}</a>
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
            <div class="col-auto col-lg accordion-menu">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-between" id="navbar-collapse-toggle-1">
                    <ul class="nav navbar-nav alt-font font-weight-700 w-100 justify-content-between">
                        <li><a href="{{route('main', app()->getLocale())}}" title="{{__('menu.main')}}" class="inner-link">{{__('menu.main')}}</a></li>
                        <li><a href="{{route('news', app()->getLocale())}}" title="{{__('menu.news')}}" class="inner-link">{{__('menu.news')}}</a></li>
                        <li><a href="{{route('memory', app()->getLocale())}}" title="{{__('menu.memory')}}" class="inner-link">{{__('menu.memory')}}</a></li>
                        <li><a href="{{route('achievements', app()->getLocale())}}" title="{{__('menu.achievement')}}" class="inner-link">{{__('menu.achievement')}}</a></li>
                        <li><a href="{{route('museum.main', app()->getLocale())}}" title="{{__('menu.museum')}}" class="inner-link">{{__('menu.museum')}}</a></li>
                        <li><a href="{{route('library', app()->getLocale())}}" title="{{__('menu.library')}}" class="inner-link">{{__('menu.library')}}</a></li>
                        <li><a href="{{route('photos', app()->getLocale())}}" title="{{__('menu.photo')}}" class="inner-link">{{__('menu.photo')}}</a></li>
                        {{--<li><a href="{{route('info', app()->getLocale())}}" title="{{__('menu.info')}}" class="inner-link">{{__('menu.info')}}</a></li>--}}
                        <!--  <li><a href="#contact" title="Contact" class="inner-link">Contact</a></li> -->
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
