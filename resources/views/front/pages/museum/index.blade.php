@extends('layouts.page')
@section('page_title')
    {{__('menu.museum')}}
@endsection
@section('page_styles')
    <link rel="stylesheet" href="{{asset('/css/jqvmap.css')}}">
    <style>
        .map-uzbekistan path {
            fill: #e5e5e5;
            stroke: #fff;
            stroke-width: 1px;
            cursor: pointer;
        }
        .map-uzbekistan path.active {
            fill: #3267a8;
        }
        .map-uzbekistan path:hover {
            fill: rgba(159,186,220,.51);
        }

        .territorial-administrations-info-box {
            display: none;
        }
        .territorial-administrations-info-box p {
            margin-bottom: 20px;
        }

        .territorial-administrations-info-box.active {
            display: flex;
            flex-direction: column;
            align-items: start;
        }
        .regiona-info {
            border-top-width: 1px!important;
            border-right-width: 1px!important;
            border-bottom-width: 1px!important;
            border-left-width: 1px!important;
            background-color: #3267a8!important;
            border-left-color: #3267a8!important;
            border-right-color: #3267a8!important;
            border-top-color: #3267a8!important;
            border-bottom-color: #3267a8!important;
            border-radius: 4px!important;
            color: #fff;
            width: 80%;
            margin: auto;
        }
        .territorial-administrations-info-box-title {
            padding-left: 15px;
            border-left: 5px solid #fff;
            font-size: 1.3rem;
        }
    </style>
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
    <section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url('{{asset('./images/main2.jpg')}}');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                    <!-- start page title -->
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{__('menu.museum')}}</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    @include('front.pages.museum.blocks.about')
    @include('front.pages.museum.blocks.region')
    @include('front.pages.museum.blocks.exposition')
    @include('front.pages.museum.blocks.teams')
    @include('front.pages.museum.blocks.services')
@endsection

@section('page_scripts')
    {{--<script src="{{asset('/js/jquery.vmap.js')}}"></script>
    <script src="{{asset('/js/vmap.uzbekistan.js')}}"></script>
    <script>

        $(document).ready(function () {
            var messages2 = {
                an:
                    "<h5>Andijon viloyati</h5>Andijon davlat universiteti tuzilmasidagi <br>Qatag`on qurbonlari xotirasi muzeyi 170100,<br> Andijon shahri, Universitet ko`chasi, 129-uy.<br>Telefon, faks: (998 74) 225 73 21<br>E-mail: vodiynoma@mail.ru",
                bu:
                    "<h5>Buxoro viloyati </h5>Buxoro Davlat Unversiteti tuzulmasidagi<br> Qatag’on qurbonlari xotirasi muzeyi 200117, <br>Buxoro shahri M.Iqbol ko’chasi, 11-uy BuxDU 3-bino 1 qavat <br>Telefon: (+998 65) 221 27 31 <br>E-mail: azalshoh.iqro@ mail.ru",
                ji:
                    "<h5>Jizzax viloyati </h5>Jizzax Davlat PedagogikaInstituti tuzulmasidagi <br>Qatag’on qurbonlari xotirasi muzeyi  130100, <br> Jizzax shahri Sh. Rashidov ko’chasi, 4-uy  “Ma’naviyat va ma’rifat” markazi<br>Telefon: (+998 72) 226 09 20<br>E-mail: jizzax muzey@ mail.ru",
                qa:
                    "<h5>Qashqadaryo viloyati</h5>Qarshi davlat universiteti tuzilmasidagi <br>Qatag‘on qurbonlari xotirasi muzeyi<br>Abu Ubayda ibn al-Jarroh yodgorlik majmuasi binosidagi ko‘rgazma <br>Qarshi shahri Jayxun ko‘chasi-304 uy<br>Telefon: 91-468-6991 E-mail: rahmatova.dilnavoz@mail.ru",
                no:
                    "<h5>Navoiy viloyati </h5>Navoiy davlat pedagogika instituti tuzilmasidagi <br>Qatag’on qurbonlari xotirasi muzeyi 210100, <br>Navoiy shaxri, Abdulla Avloniy ko’chasi – 5 <br>Telefon: (0436) 225-21-99, <br>E-mail: navdpi_muzey@mail.ru",
                na:
                    "<h5>Namangan viloyati </h5>Namangan Davlat Universiteti tuzilmasidagi<br>“ Qatag‘on qurbonlari hotirasi” muzeyi 160700,<br>To‘raqo‘rg‘on tumani To‘raqo‘rg‘on ko‘chasi Ishoqxon to‘ra Ibrat majmuasi.<br>Tel: (998-69)227-01-44<br>E-mail: ibratmuseum@gmail.com ",
                sa: "<h5>Samarqand viloyati </h5>",
                gu: "<h5>Sirdaryo viloyati </h5>",
                te: "<h5>Surxandaryo viloyati </h5>",
                to:
                    '<h5>Toshkent viloyati</h5> Chirchiq davlat pedagogika instituti tuzilmasidagi<br> "Qatag‘on qurbonlari xotirasi muzeyi". <br>Chirchiq shahar A Temur ko‘chasi 104 uy.<br>Telefon (998 70) 712-45-41<br>',
                fa:
                    "<h5>Farg‘ona viloyati</h5>Farg‘ona davlat universiteti tuzilmasidagi <br>Qatag‘on qurbonlari muzeyi <br>Farg‘ona shahar Murabbiylar ko‘chasi 19 uy.<br>Telefon (998 73) 244-47-19<br>E-mail: s_sidikov1947@mail.ru",
                xo:
                    "<h5>Xorazm viloyati</h5>Urganch davlat unversiteti tuzulmasidagi<br>«Qatag’on qurbonlari xotirasi» muzeyi <br>220100, Xorazm viloyati, Urganch shahri Tinchlik ko’chasi, 8/1-uy<br>Telefon: (0362) 224 67 00<br> E-mail: urgenchmuseum@mail.ru",
                qo:
                    "<h5>Qoraqalpog`iston Respublikasi </h5>Qoraqalpoq  davlat universiteti  tuzilmasidagi  <br> Qatag‘on qurbonlari xotirasi davlat muzeyi 230100, <br> Nukus shahri, Ch.Abdirov ko‘chasi,  1-uy,  2-bino, <br> Tel.: (+99861) 223 57 16<br> E-mail: kudiyarov 1966 @mail.ru",
                tosh:
                    "<h5>Toshkent shahri </h5>100184, Toshkent shahri, Yunusobod tumani,<br>A.Temur ko’chasi, “Shahidlar xotirasi” maydoni<br>Telefon: (998-71) 2442940, <br>E-mail: info@xotira-muzey.uz",
            };


            $('#vmap').vectorMap({
                map: 'uzbekistan',
                backgroundColor: '',
                color: 'transparent',
                hoverColor: '#6EE180',
                enableZoom: false,
                showTooltip: true,
                borderColor: '#000',
                borderWidth: 2,
                borderOpacity: 1,
                colors: {
                    to: '#02AE45',
                    qo: '#02AE38',
                    an: '#02AE38',
                    bu: '#02AE30',
                    qa: '#02AE25',
                    no: '#02AE25',
                    gu: '#02AE15',
                    sa: '#02AE38',
                    fa: '#02AE38',
                    ji: '#02AE38',
                    na: '#02AE20',
                    te: '#02AE38',
                    xo: '#02AE25',
                    tosh: '#02AE38'
                },
                onLabelShow: function (event, label, code) {
                   /* $(".jqvmap-label").html(messages[label]);*/
                    $("#mapLabels").html(messages2[code]);
                },

            });
        });



    </script>--}}
    <script>
        (function ($) {
            $(document).ready(function () {
                $('.TT').on('click', function () {
                    $('.TT').addClass('active').attr("popover");
                    $('.TV,.NS,.NM,.AN,.BH,.FG,.JZ,.NA,.KD,.SD,.SI,.UG').removeClass('active')
                });
                $('.TV').on('click', function () {
                    $('.TV').addClass('active');
                    $('.TT,.NS,.NM,.AN,.BH,.FG,.JZ,.NA,.KD,.SD,.SI,.UG,.SA').removeClass('active')
                });
                $('.NS').on('click', function () {
                    $('.NS').addClass('active');
                    $('.TT,.TV,.NM,.AN,.BH,.FG,.JZ,.NA,.KD,.SD,.SI,.UG,.SA').removeClass('active')
                });
                $('.NM').on('click', function () {
                    $('.NM').addClass('active');
                    $('.TT,.TV,.NS,.AN,.BH,.FG,.JZ,.NA,.KD,.SD,.SI,.UG,.SA').removeClass('active')
                });
                $('.AN').on('click', function () {
                    $('.AN').addClass('active');
                    $('.TT,.TV,.NS,.NM,.BH,.FG,.JZ,.NA,.KD,.SD,.SI,.UG,.SA').removeClass('active')
                });
                $('.BH').on('click', function () {
                    $('.BH').addClass('active');
                    $('.TT,.TV,.NS,.NM,.AN,.FG,.JZ,.NA,.KD,.SD,.SI,.UG,.SA').removeClass('active')
                });
                $('.FG').on('click', function () {
                    $('.FG').addClass('active');
                    $('.TT,.TV,.NS,.NM,.AN,.BH,.JZ,.NA,.KD,.SD,.SI,.UG,.SA').removeClass('active')
                });
                $('.JZ').on('click', function () {
                    $('.JZ').addClass('active');
                    $('.TT,.TV,.NS,.NM,.AN,.BH,.FG,.NA,.KD,.SD,.SI,.UG,.SA').removeClass('active')
                });
                $('.NA').on('click', function () {
                    $('.NA').addClass('active');
                    $('.TT,.TV,.NS,.NM,.AN,.BH,.FG,.JZ,.KD,.SD,.SI,.UG,.SA').removeClass('active')
                });
                $('.KD').on('click', function () {
                    $('.KD').addClass('active');
                    $('.TT,.TV,.NS,.NM,.AN,.BH,.FG,.JZ,.NA,.SD,.SI,.UG,.SA').removeClass('active')
                });
                $('.SD').on('click', function () {
                    $('.SD').addClass('active');
                    $('.TT,.TV,.NS,.NM,.AN,.BH,.FG,.JZ,.NA,.KD,.SI,.UG,.SA').removeClass('active')
                });
                $('.SI').on('click', function () {
                    $('.SI').addClass('active');
                    $('.TT,.TV,.NS,.NM,.AN,.BH,.FG,.JZ,.NA,.KD,.SD,.UG,.SA').removeClass('active')
                });
                $('.UG').on('click', function () {
                    $('.UG').addClass('active');
                    $('.TT,.TV,.NS,.NM,.AN,.BH,.FG,.JZ,.NA,.KD,.SD,.SI,.SA').removeClass('active')
                });
                $('.SA').on('click', function () {
                    $('.SA').addClass('active');
                    $('.TT,.TV,.NS,.NM,.AN,.BH,.FG,.JZ,.NA,.KD,.SD,.SI,.UG').removeClass('active')
                });
                $(function () {
                    $('[data-toggle="popover"]').popover()
                })
            })
        })(jQuery)
    </script>
@endsection



