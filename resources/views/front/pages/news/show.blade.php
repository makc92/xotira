@extends('layouts.page')
@section('page_title', $news->translate(app()->getLocale())->title)
@section('page_lang')
    @foreach(config('app.languages') as $locale)
        <a href="{{route('news.show',[$locale,$news->translate($locale)->slug] )}}"
           class="text-link-white-2 line-height-normal"
           @if (app()->getLocale() === $locale) style="font-weight: bold; text-decoration: underline" @endif
        >{{ strtoupper($locale) }}</a>
        <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle"></div>
    @endforeach
@endsection
@section('page_content')
    <section class="wow fadeIn background-park-light">
        <div class="container">
            <div class="col-12 mx-auto last-paragraph-no-margin text-justify text-md-left">
                <img src="{{$news->getImagePath('thumbnail')}}" alt="" class="width-100 margin-50px-bottom md-margin-30px-bottom" style="box-shadow: 0 0 10px rgba(0,0,0,.2)">
                <h5 class="alt-font font-weight-600 text-extra-dark-gray">{{$news->translate(app()->getLocale())->title}}</h5>
                <div class="news-show">
                    {!! $news->translate(app()->getLocale())->content!!}
                </div>
            </div>
        </div>
    </section>
    {{--<livewire:front.show-news />--}}
@endsection
