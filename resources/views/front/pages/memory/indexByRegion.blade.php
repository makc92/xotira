@extends('layouts.page')
@section('page_title')
    Хотира Китоби
@endsection
@section('page_styles')
    @livewireStyles
@endsection
@section('page_lang')
    @foreach(config('app.languages') as $locale)
        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(),[$locale, $region] ) }}"
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
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{__('menu.memory')}}</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <livewire:front.show-veterans-by-region :region="$region" />
@endsection

@section('page_scripts')
    @livewireScripts
@endsection

