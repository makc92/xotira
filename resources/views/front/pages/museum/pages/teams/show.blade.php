@extends('layouts.page')
@section('page_title')
    {{__('about_muzeum.teams')}}
@endsection
@section('page_styles')
    <link rel="stylesheet" href="{{asset('/css/jqvmap.css')}}">
@endsection
@section('page_lang')
    @foreach(config('app.languages_front') as $locale => $desc)
        <a href="{{route('museum.teams.show',[$locale,$team->translate($locale)->slug] )}}"
           class="text-link-white-2 line-height-normal"
           @if (app()->getLocale() === $locale) style="font-weight: bold; text-decoration: underline" @endif
        >{{ strtoupper($desc) }}</a>
        <div
            class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle"></div>
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
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{__('about_muzeum.teams')}}</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-gray" id="museum">
        <div class="container">
            <div class="row align-items-center justify-content-center mb-5">
                <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInLeft">
                    <img
                        src="{{$team->thumbnail ? $team->getImagePath('thumbnail', 'medium') : 'http://placehold.it/599x612' }}"
                        alt="" class="border-radius-6 w-100 image-shadow" data-no-retina="">
                </div>
                <div
                    class="col-12 col-lg-7 text-center md-padding-15px-lr wow fadeInRight"
                    data-wow-delay="0.2s">
                    <h5 style="color:#323232">{{ $team->translate(app()->getLocale())->name }}</h5>
                    <p style="color:#323232">{{ $team->translate(app()->getLocale())->position }}</p>
                    <div class="d-flex justify-content-around">
                        @if($team->phone)
                            <p><a href="tel:{{$team->phone}}" class="text-extra-dark-gray"><i
                                        class="fas fa-phone"
                                        style="color:#3267a8;font-size: 14px;"></i> {{$team->phone}}</a></p>
                        @endif
                        @if($team->email)
                            <p><a href="mailto:{{$team->email}}" class="text-extra-dark-gray"><i
                                        class="fas fa-envelope"
                                        style="color:#3267a8;font-size: 14px;"></i> {{$team->email}}</a></p>
                        @endif
                    </div>

                    <p>{!! $team->translate(app()->getLocale())->bio !!} </p>
                </div>
                @if($team->days)
                    <div class="col-12 mt-5">
                        <h6 style="color:#323232">{{__('teams.days')}}: </h6>
                        <p class="">{!! $team->translate(app()->getLocale())->days !!}</p>
                    </div>
                @endif
                <div class="col-12 mt-5">
                    <h6 style="color:#323232">{{__('teams.activity')}}:</h6>
                    <p class="">{!! $team->translate(app()->getLocale())->activity !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection



