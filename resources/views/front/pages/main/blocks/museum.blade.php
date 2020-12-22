<!-- start Музей section -->
<section class="wow bg-light-gray fadeIn" id="museum">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div
                class="col-12 col-lg-7 text-center md-padding-15px-lr wow fadeInLeft mb-4"
                data-wow-delay="0.2s">
                <h4 class="alt-font text-extra-dark-gray">{{__('menu.museum')}}</h4>
                <p>{{__('main.museum')}}</p>
                <a href="{{route('museum.main', app()->getLocale())}}" class="btn btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top">Batafsil</a>
            </div>
            <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInRight">
                <img src="{{asset('images/main3.jpg')}}" alt="" class="border-radius-6 w-100" data-no-retina="">
            </div>
        </div>
    </div>
</section>
<!-- end Музей section -->
