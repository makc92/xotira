<!-- start library section -->
<section class="wow bg-light-gray fadeIn" id="achievement">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInLeft">
                <img src="{{asset('./images/achievement.jpg')}}" alt="" class="border-radius-6 w-100" data-no-retina="">
            </div>
            <div
                class="col-12 col-lg-7 text-center md-padding-15px-lr wow fadeInRight"
                data-wow-delay="0.2s">
                <h4 class="alt-font text-extra-dark-gray">{{__('menu.achievement')}}</h4>
                <p>{{__('main.achievement')}}</p>
                <a href="{{route('achievements', app()->getLocale())}}"
                   class="btn btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top">Batafsil</a>
            </div>
        </div>
    </div>
</section>
<!-- end library section -->
