@extends('layouts.page')
@section('page_title')
    {{__('about_exposition.title')}}
@endsection
@section('page_styles')
    <link rel="stylesheet" href="{{asset('/css/jqvmap.css')}}">
@endsection
@section('page_lang')
    @foreach(config('app.languages_front') as $locale => $desc)
        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
           class="text-link-white-2 line-height-normal"
           @if (app()->getLocale() === $locale) style="font-weight: bold; text-decoration: underline" @endif
        >{{ strtoupper($desc) }}</a>
        <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle"></div>
    @endforeach
@endsection

@section('page_content')
    <section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url('{{asset('./images/main2.jpg')}}');" >
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                    <!-- start page title -->
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{__('about_exposition.title')}}</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <section class="wow bg-light-gray fadeIn" id="museum">
        <div class="container">
            <div class="row align-items-center justify-content-center mb-5">
                <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInLeft">
                    <img src="{{asset('./images/exposition/1.jpg')}}" alt="" class="border-radius-6 w-100 image-shadow" data-no-retina="">
                </div>
                <div
                    class="col-12 col-lg-7 text-justify md-padding-15px-lr wow fadeInRight"
                    data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark-gray">{{__('expositions.exposition-1-title')}}</h6>
                    <p class="mb-0">{!! __('expositions.exposition-1-text') !!}</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-center mb-5">
                <div
                    class="col-12 col-lg-7 text-justify md-padding-15px-lr wow fadeInLeft"
                    data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark-gray">{{__('expositions.exposition-2-title')}}</h6>
                    <p class="mb-0">{!! __('expositions.exposition-2-text') !!}</p>
                </div>
                <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInRight">
                    <img src="{{asset('./images/exposition/2.jpg')}}" alt="" class="border-radius-6 w-100 image-shadow" data-no-retina="">
                </div>
            </div>
            <div class="row align-items-center justify-content-center mb-5">
                <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInLeft">
                    <img src="{{asset('./images/exposition/3.jpg')}}" alt="" class="border-radius-6 w-100 image-shadow" data-no-retina="">
                </div>
                <div
                    class="col-12 col-lg-7 text-justify md-padding-15px-lr wow fadeInRight"
                    data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark-gray">{{__('expositions.exposition-3-title')}}</h6>
                    <p class="mb-0">{!! __('expositions.exposition-3-text') !!}</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-center mb-5">
                <div
                    class="col-12 col-lg-7 text-justify md-padding-15px-lr wow fadeInLeft"
                    data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark-gray">{{__('expositions.exposition-4-title')}}</h6>
                    <p class="mb-0">{!! __('expositions.exposition-4-text') !!}</p>
                </div>
                <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInRight">
                    <img src="{{asset('./images/exposition/4.jpg')}}" alt="" class="border-radius-6 w-100 image-shadow" data-no-retina="">
                </div>

            </div>
            <div class="row align-items-center justify-content-center mb-5">
                <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInLeft">
                    <img src="{{asset('./images/exposition/5.jpg')}}" alt="" class="border-radius-6 w-100 image-shadow" data-no-retina="">
                </div>
                <div
                    class="col-12 col-lg-7 text-justify md-padding-15px-lr wow fadeInRight"
                    data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark-gray">{{__('expositions.exposition-5-title')}}</h6>
                    <p class="mb-0">{!! __('expositions.exposition-5-text') !!}</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-center mb-5">
                <div
                    class="col-12 col-lg-7 text-justify md-padding-15px-lr wow fadeInLeft"
                    data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark-gray">{{__('expositions.exposition-6-title')}}</h6>
                    <p class="mb-0">{!! __('expositions.exposition-6-text') !!}</p>
                </div>
                <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInRight">
                    <img src="{{asset('./images/exposition/6.jpg')}}" alt="" class="border-radius-6 w-100 image-shadow" data-no-retina="">
                </div>
            </div>
            <div class="row align-items-center justify-content-center mb-5">
                <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInLeft">
                    <img src="{{asset('./images/exposition/7.jpg')}}" alt="" class="border-radius-6 w-100 image-shadow" data-no-retina="">
                </div>
                <div
                    class="col-12 col-lg-7 text-justify md-padding-15px-lr wow fadeInRight"
                    data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark-gray">{{__('expositions.exposition-7-title')}}</h6>
                    <p class="mb-0">{!! __('expositions.exposition-7-text') !!}</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-center mb-5">
                <div
                    class="col-12 col-lg-7 text-justify md-padding-15px-lr wow fadeInLeft"
                    data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark-gray">{{__('expositions.exposition-8-title')}}</h6>
                    <p class="mb-0">{!! __('expositions.exposition-8-text') !!}</p>
                </div>
                <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInRight">
                    <img src="{{asset('./images/exposition/8.jpg')}}" alt="" class="border-radius-6 w-100 image-shadow" data-no-retina="">
                </div>
            </div>
            <div class="row align-items-center justify-content-center mb-5">
                <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInLeft">
                    <img src="{{asset('./images/exposition/9.jpg')}}" alt="" class="border-radius-6 w-100 image-shadow" data-no-retina="">
                </div>
                <div
                    class="col-12 col-lg-7 text-justify md-padding-15px-lr wow fadeInRight"
                    data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark-gray">{{__('expositions.exposition-9-title')}}</h6>
                    <p class="mb-0">{!! __('expositions.exposition-9-text') !!}</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-center mb-5">
                <div
                    class="col-12 col-lg-7 text-justify md-padding-15px-lr wow fadeInLeft"
                    data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark-gray">{{__('expositions.exposition-10-title')}}</h6>
                    <p class="mb-0">{!! __('expositions.exposition-10-text') !!}</p>
                </div>
                <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInRight">
                    <img src="{{asset('./images/exposition/10.jpg')}}" alt="" class="border-radius-6 w-100 image-shadow" data-no-retina="">
                </div>
            </div>
        </div>
    </section>
@endsection



