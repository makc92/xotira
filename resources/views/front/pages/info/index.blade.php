@extends('layouts.page')
@section('page_title')
    {{__('menu.info')}}
@endsection
@section('page_styles')
    @livewireStyles
@endsection
@section('page_lang')
    @foreach(config('app.languages') as $locale)
        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
           class="text-link-white-2 line-height-normal"
           @if (app()->getLocale() === $locale) style="font-weight: bold; text-decoration: underline" @endif
        >{{ strtoupper($locale) }}</a>
        <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle"></div>
    @endforeach
@endsection

@section('page_content')
    <section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url('{{asset('./images/main2.jpg')}}');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                    <!-- start page title -->
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{__('menu.info')}}</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <section id="info">
        <div class="container">
            <form id="project-contact-form" action="project-contact.php" method="post">
                <div class="row">
                    <div class="col-12">
                        <div id="success-project-contact-form" class="mx-0" style="display: none;"></div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="text" name="name" id="name" placeholder="Ismingiz *" class="big-input">
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="text" name="phone" id="phone" placeholder="Phone" class="big-input">
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="text" name="email" id="email" placeholder="E-mail *" class="big-input">
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="text" name="address" id="address" placeholder="Mavzu *" class="big-input">
                    </div>
                    <div class="col-12">
                        <textarea name="comment" id="comment" placeholder="Xabar" rows="6" class="big-textarea"></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button id="project-contact-us-button" type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top">Jo'natish</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('page_scripts')
    @livewireScripts
@endsection

