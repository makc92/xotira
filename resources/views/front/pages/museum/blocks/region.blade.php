{{--
<section class="background-park-light" id="regional">
    <div class="container-fluid">
        <div class="col-12 mx-auto">
            <h4 class="alt-font text-extra-dark-gray font-weight-600 text-center mb-5 heading">{{__('about_muzeum.regional')}}</h4>
            <div class="mapBox position-relative" id="mapbox">
                <div class="mapHolder"> </div>
                <div id="vmap" style="height: 400px; margin: 0px auto;"></div>
                <div id="mapLabels" class="text-center" style="position: relative;
    top: -80px;"></div>
            </div>
        </div>
    </div>
</section>
--}}

<section class="background-park-light" id="regional">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 mx-auto">
                <h4 class="alt-font text-extra-dark-gray font-weight-600 text-center mb-5 heading">{{__('about_muzeum.regional')}}</h4>
            </div>
            <div class="col-lg-5">
                @include('front.pages.museum.blocks.map.region-info')
            </div>
            <div class="col-lg-7">
                @include('front.pages.museum.blocks.map.map')
            </div>
        </div>

    </div>
</section>
@section('page_script')
   {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
--}}
@endsection
