@extends('layouts.page')
@section('page_title', $achievement->translate(app()->getLocale())->title)
@section('page_lang')
    @foreach(config('app.languages_front') as $locale => $desc)
        <a href="{{route('achievements.show',[$locale,$achievement->translate($locale)->slug] )}}"
           class="text-link-white-2 line-height-normal"
           @if (app()->getLocale() === $locale) style="font-weight: bold; text-decoration: underline" @endif
        >{{ strtoupper($desc) }}</a>
        <div
            class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle"></div>
    @endforeach
@endsection
@section('page_content')
    <section class="wow fadeIn background-park-light" id="achievement">
        <div class="container">
            <div class="col-12 mx-auto last-paragraph-no-margin text-justify text-md-left">
                <div class="text-center">
                    <img
                        src="{{$achievement->thumbnail ? $achievement->getImagePath('thumbnail', 'medium') : asset('/images/achievement.jpg')}}"
                        alt="" class="margin-50px-bottom md-margin-30px-bottom"
                        style="box-shadow: 0 0 10px rgba(0,0,0,.2)">
                </div>
                <h5 class="alt-font font-weight-600 text-extra-dark-gray">{{$achievement->translate(app()->getLocale())->title}}</h5>
                <div class="news-show">
                    {!! $achievement->translate(app()->getLocale())->content!!}
                </div>
            </div>
        </div>
    </section>
    {{--<livewire:front.show-news />--}}
@endsection
