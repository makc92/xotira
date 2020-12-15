<!-- start header -->
<header class="header-with-topbar" style="height: 108px">
    <!-- topbar -->
    <div class="top-header-area bg-black padding-10px-tb">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-end">
                <div class="col-md-6 text-uppercase alt-font d-flex align-items-center justify-content-center justify-content-md-end">
                    @foreach(config('app.languages') as $locale)
                        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                           class="text-link-white-2 line-height-normal"
                           @if (app()->getLocale() === $locale) style="font-weight: bold; text-decoration: underline" @endif
                        >{{ strtoupper($locale) }}</a>
                        <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end topbar -->
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-top header-light-transparent background-transparent nav-box-width navbar-expand-lg">
        <div class="container-fluid nav-header-container">
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
                        <li><a href="{{route('main', app()->getLocale())}}" title="Home" class="inner-link">Asosiy</a></li>
                        <li><a href="#news" title="Home" class="inner-link">Янгиликлар</a></li>
                        <li><a href="#memory" title="About" class="inner-link">Хотира китоби</a></li>
                        <li><a href="#museum" title="Team" class="inner-link">Музей</a></li>
                        <li><a href="#lib" title="Blog" class="inner-link">Электрон кутубхона</a></li>
                        <li><a href="#photo" title="Work" class="inner-link">Медиатека</a></li>
                        <li><a href="#form" title="Clients" class="inner-link">Маълумот қолдириш</a></li>
                        <!--  <li><a href="#contact" title="Contact" class="inner-link">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
    <!-- end navigation -->
</header>
