@extends('layouts.page')
@section('page_title')
    {{__('menu.contacts')}}
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
    <section class="parallax" data-stellar-background-ratio="0.5"
             style="background-image: url('{{asset('./images/main2.jpg')}}');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                    <!-- start page title -->
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{__('menu.contacts')}}</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <section id="contacts" class="contacts">
        <div class="container">
            <div class="row">
                {{--<div class="col-12">
                    <h4 class="alt-font text-extra-dark-gray font-weight-600 text-center mb-5 heading">{{__('menu.contacts')}}</h4>
                </div>--}}
                <div class="col-12 col-lg-3 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="d-inline-block margin-20px-bottom">
                        <div class="bg-gold icon-round-medium"><i class="fas fa-map-marker-alt"></i></div>
                    </div>
                    <p class="mx-auto">{{__('footer.address')}}</p>
                </div>
                <div class="col-12 col-lg-3 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="d-inline-block margin-20px-bottom">
                        <div class="bg-gold icon-round-medium"><i class="far fa-clock"></i></div>
                    </div>
                    <p class="mx-auto">{!!  __('footer.hours')!!}</p>
                </div>
                <div class="col-12 col-lg-3 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="d-inline-block margin-20px-bottom">
                        <div class="bg-gold icon-round-medium"><i class="far fa-phone"></i></div>
                    </div>
                    <p class="mx-auto">(998-71) 2442940 <br> (998-71) 2447331</p>
                </div>
                <div class="col-12 col-lg-3 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="d-inline-block margin-20px-bottom">
                        <div class="bg-gold icon-round-medium"><i class="fas fa-envelope"></i></div>
                    </div>
                    <p class="mx-auto"> INFO@XOTIRA-MUZEY.UZ</p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-0 one-second-screen md-height-400px wow fadeIn">
        <iframe class="w-100 h-100"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11981.000554443632!2d69.2882191!3d41.3469165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9ee6a42080259222!2z0JPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3Ri9C5INC80YPQt9C10Lkg0J_QsNC80Y_RgtC4INC20LXRgNGC0LIg0YDQtdC_0YDQtdGB0YHQuNC5INC_0YDQuCDQmtCw0LHQuNC90LXRgtC1INCc0LjQvdC40YHRgtGA0L7QsiDQo9C30LHQtdC60LjRgdGC0LDQvQ!5e0!3m2!1sru!2s!4v1611747236624!5m2!1sru!2s"></iframe>
{{--
        <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843821917424!2d144.956054!3d-37.817127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1427947693651"></iframe>
--}}
    </section>
@endsection


