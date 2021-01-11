@extends('layouts.page')
@section('page_title')
    {{__('search.title')}}
@endsection
@section('page_styles')
    @livewireStyles
@endsection
@section('page_lang')
    @foreach(config('app.languages_front') as $locale => $desc)
        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
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
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{__('search.title')}}</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>

    <section class="padding-50px-tb">
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 d-flex flex-column justify-content-center text-center">
                    <form method="get" action="{{route('search', app()->getLocale())}}" style="width: 100%">
                      <div class="search-block d-flex">
                            <div class="w-100 d-flex">
                                <input class="search-input" type="text" name="q" placeholder="{{__('search.title')}}" value="{{$query ? $query : ''}}">
                                <select name="model" id="model" class="w-30 search-select">
                                    @foreach(config('app.search_query') as $model)
                                        <option value="{{$model}}" {{$model == $query_model ? 'selected' : ''}}>{{__("menu.$model")}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    @if($results and $results->isNotEmpty())
        @if($query_model == 'news')
            @include('front.pages.search.blocks.news');
        @elseif($query_model == 'achievement')
            @include('front.pages.search.blocks.achievements')
        @elseif($query_model == 'memory')
            @include('front.pages.search.blocks.memory')
        @endif
    @else
        <div class="container text-center">
            <div class="row mb-5">
                <div class="col-12">
                    <h5>{{__('search.not-found')}}</h5>
                </div>
            </div>
        </div>
    @endif

@endsection

@section('page_scripts')
    @livewireScripts
@endsection

