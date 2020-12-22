<!-- start Музей section -->
<section class="wow bg-light-gray fadeIn" id="museum">
    <div class="container">
        <div class="row align-items-center justify-content-center mb-5">
            <div class="col-12">
                <h5 class="alt-font text-extra-dark-gray font-weight-600 text-center mb-5">{{__('about_exposition.title')}}</h5>
            </div>
            <div class="col-lg-5 col-sm-8 col-10 text-center md-margin-30px-bottom wow fadeInLeft">
                <img src="{{asset('./images/exposition/1.jpg')}}" alt="" class="border-radius-6 w-100" data-no-retina="">
            </div>
            <div
                class="col-12 col-lg-7 text-center md-padding-15px-lr wow fadeInRight"
                data-wow-delay="0.2s">
                <p class="mn-0">{{__('about_exposition.description')}}</p>
                <a href="{{route('museum.exposition', app()->getLocale())}}" class="btn btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top">Batafsil</a>
            </div>
        </div>
    </div>
</section>
<!-- end Музей section -->
