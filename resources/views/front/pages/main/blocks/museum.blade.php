<!-- start Музей section -->
<section class="bg-light-gray position-relative" id="museum">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div
                class="col-12 col-lg-7 text-center md-padding-15px-lr wow fadeInLeft mb-4"
                data-wow-delay="0.2s">
                <h4 class="alt-font heading text-extra-dark-gray">{{__('menu.museum')}}</h4>
                <p>{{__('main.museum')}}</p>
                <a href="{{route('museum.main', app()->getLocale())}}" class="btn btn-gold btn-medium text-extra-small btn-rounded margin-5px-top">{{__('buttons.more')}}</a>
            </div>
            <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInRight">
                <img src="{{asset('images/main3.jpg')}}" alt="" class="border-radius-6 w-100" data-no-retina="">
            </div>
        </div>
    </div>
</section>
<!-- end Музей section -->
