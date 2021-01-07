<!-- start gallery section -->
<section class="" id="photo">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                <div class="position-relative overflow-hidden w-100">
                    <h4 class="alt-font heading text-dark margin-15px-bottom sm-margin-20px-bottom">{{__('menu.photo')}}</h4>
                </div>
            </div>
        </div>
        <div class="row lightbox-gallery">
            <div class="col-12 p-0 sm-padding-15px-lr">
                <ul class="portfolio-grid work-3col hover-option4 gutter-medium">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio item -->
                    @foreach($photos as $photo)
                    <li class="grid-item web branding design wow fadeInUp">
                        <a href="{{$photo->thumbnail ? $photo->getImagePath('thumbnail', 'medium') : asset('images/photo.jpg')}}">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="{{$photo->thumbnail ? $photo->getImagePath('thumbnail', 'medium') : asset('images/photo.jpg')}}" alt=""
                                                                                   class="project-img-gallery"/></div>
                                <figcaption>
                                    <div class="portfolio-hover-main d-flex justify-content-center align-items-center">
                                        <div class="portfolio-hover-content position-relative">
                                            <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    @endforeach
                    <!-- end portfolio item -->
                </ul>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-lg-6 col-md-10 text-center last-paragraph-no-margin">
                <a class="btn btn-medium btn-gold btn-rounded lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto"
                   href="{{route('photos', app()->getLocale())}}">{{__('buttons.more')}}</a>
            </div>
        </div>
    </div>
</section>
<!-- end gallery section -->
