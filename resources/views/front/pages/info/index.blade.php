@extends('layouts.page')
@section('page_title')
    {{__('menu.info')}}
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
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{__('menu.info')}}</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <section id="info">
        <div class="container">
            @if ($errors->any())
                @include('layouts.errors')
            @endif
            @include('flash::message')
            <form action="{{route('info.send', app()->getLocale())}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <input type="text" name="name" id="name" placeholder="{{__('form.name')}}" class="big-input"
                               required>
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="text" name="phone" id="phone" placeholder="{{__('form.phone')}}" class="big-input"
                               required>
                    </div>
                    <div class="col-12">
                        <input type="text" name="email" id="email" placeholder="{{__('form.email')}}" class="big-input"
                               required>
                    </div>
                    <div class="col-12">
                        <textarea name="message" id="message" placeholder="{{__('form.message')}}" rows="6"
                                  class="big-textarea" required></textarea>
                    </div>
                    <div class="col-12 col-lg-6 md-margin-10px-bottom">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedPhoto" name="photo">
                            <label class="custom-file-label" for="validatedPhoto">{{__('form.photo')}}</label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6  md-margin-10px-bottom">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedDocument" name="document">
                            <label class="custom-file-label" for="validatedDocument">{{__('form.document')}}</label>
                        </div>
                    </div>
                    <div class="col-12 captcha mb-3 mt-3 text-center">
                        {{--{!! Captcha::img() !!}--}}
                        <span> {!! captcha_img() !!}</span>

                    </div>
                    <div class="col-md-4 captcha">
                        <input type="text" name="captcha" id="captcha">
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-gold btn-large margin-20px-top">
                            {{__('form.send')}}</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
@endsection

@section('page_scripts')
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script>
        bsCustomFileInput.init();

        $('.captcha span').click(function (){
            $.ajax({
                url: '{{ route('captcha.refresh', app()->getLocale()) }}',
                type: 'get',
                success: function (data) {
                    $('.captcha span').html(data.captcha);
                }
            });
        })


    </script>
@endsection

