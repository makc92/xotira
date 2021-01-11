<header class="header-with-topbar fixed-topbar sticky">
    <!-- topbar -->
    <div class="top-header-area bg-black padding-10px-tb">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-6 d-flex align-items-center">
                    <div id="specialcontainer">
                        <a href="#" id="menutoggle" class="special-button"><i class="far fa-eye"></i>  <span class="sm-display-none">{{__('buttons.special')}}</span></a>
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
                <div class="col-6 text-uppercase alt-font d-flex align-items-center justify-content-center justify-content-md-end">
                    @foreach(config('app.languages_front') as $locale => $desc)
                    <a href="{{ route('main', $locale) }}"
                       class="text-link-white-2 line-height-normal"
                       @if (app()->getLocale() === $locale) style="font-weight: bold; text-decoration: underline" @endif
                    >{{ strtoupper($desc) }}</a>
                    <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle"></div>
                    @endforeach
                    {{--<a href="mailto:no-reply@domain.com" class="text-link-white-2 line-height-normal">no-reply@domain.com</a>--}}
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light-transparent background-transparent nav-box-width navbar-expand-lg on no-full">
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
                        <li><a href="#news" title="{{__('menu.news')}}" class="inner-link">{{__('menu.news')}}</a></li>
                        <li><a href="#memory" title="{{__('menu.memory')}}" class="inner-link">{{__('menu.memory')}}</a></li>
                        <li><a href="#achievement" title="{{__('menu.achievement')}}" class="inner-link">{{__('menu.achievement')}}</a></li>
                        <li><a href="#museum" title="{{__('menu.museum')}}" class="inner-link">{{__('menu.museum')}}</a></li>
                        <li><a href="#lib" title="{{__('menu.library')}}" class="inner-link">{{__('menu.library')}}</a></li>
                        <li><a href="#photo" title="{{__('menu.photo')}}" class="inner-link">{{__('menu.photo')}}</a></li>
                        {{--<li><a href="#form" title="{{__('menu.info')}}" class="inner-link">{{__('menu.info')}}</a></li>--}}
                        <!--  <li><a href="#contact" title="Contact" class="inner-link">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- start header -->
