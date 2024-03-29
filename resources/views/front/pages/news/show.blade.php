@extends('layouts.page')
@section('page_title', $news->translate(app()->getLocale())->title)
@section('page_lang')
    @foreach(config('app.languages_front') as $locale => $desc)
        <a href="{{route('news.show',[$locale,$news->translate($locale)->slug] )}}"
           class="text-link-white-2 line-height-normal"
           @if (app()->getLocale() === $locale) style="font-weight: bold; text-decoration: underline" @endif
        >{{ strtoupper($desc) }}</a>
        <div
            class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle"></div>
    @endforeach
@endsection
@section('page_content')
    <section id="news">
        <div class="container">
            <div class="col-12 mx-auto last-paragraph-no-margin text-justify text-md-left">
                <div class="text-center mb-5">
                    <img src="{{$news->thumbnail ? $news->getImagePath('thumbnail', 'medium') : asset('images/fakernews.jpg')}}"
                         class="text-center">

                </div>
                <h5 class="alt-font font-weight-600 text-extra-dark-gray">{{$news->translate(app()->getLocale())->title}}</h5>
                <div class="news-show">
                    {!! $news->translate(app()->getLocale())->content!!}
                </div>
                <div id="social-share">
                    {!! Share::page(URL::current(), $news->translate(app()->getLocale())->title)
                   ->facebook()
                   ->twitter()
                   ->telegram()
                   ->linkedin('Extra linkedin summary can be passed here')
                   ->whatsapp() !!}
                </div>
               {{-- <h1><a href="https://twitter.com/intent/tweet?text={{$news->translate(app()->getLocale())->title}}&url={{URL::current()}}">twitter</a></h1>
                <h1> <a class="share-btn-vk" href="https://vk.com/share.php?url=[LINK]" target="_blank" onclick="return Share.me(this);">
                        <div class="vk share-block">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                        </div>
                    </a></h1>
                <h1><a href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl={{URL::current()}}&st.comments={{$news->translate(app()->getLocale())->title}}" class="social-ok" rel="nofollow" target="_blank">
                     asdasd
                    </a></h1>--}}
            </div>
        </div>


    </section>

    {{--<livewire:front.show-news />--}}
@endsection
@section('page_scripts')
    <script src="{{ asset('js/share.js') }}"></script>
@endsection
