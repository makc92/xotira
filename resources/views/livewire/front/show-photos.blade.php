<section class="" id="photo">
    <div class="container">
        <div class="row lightbox-gallery">
            <div class="col-12 p-0 sm-padding-15px-lr">
                <h4 class="text-center">{{__('menu.photo')}}</h4>
                <ul class="portfolio-grid work-3col hover-option4 gutter-medium">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio item -->
                    @foreach($photos as $photo)
                        <li class="grid-item web branding design">
                            <a href="{{$photo->thumbnail ? $photo->getImagePath('thumbnail', 'medium') : asset('images/photo.jpg')}}">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img
                                            src="{{$photo->thumbnail ? $photo->getImagePath('thumbnail', 'medium') : asset('images/photo.jpg')}}"
                                            alt=""
                                            class="project-img-gallery"/></div>
                                    <figcaption>
                                        <div
                                            class="portfolio-hover-main d-flex justify-content-center align-items-center">
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
            <div class="col-12 mt-5">
                {{$photos->links()}}
            </div>
        </div>
    </div>
</section>
