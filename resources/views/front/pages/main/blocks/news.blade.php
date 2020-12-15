<!-- start News section -->
<section class="wow fadeIn" id="news">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                <div class="position-relative overflow-hidden w-100">
                    <h4 class="alt-font text-dark margin-15px-bottom sm-margin-20px-bottom">Янгиликлар</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($news as $news_item)
            <!-- start post item -->
                <div
                    class="col-10 col-lg-3 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp">
                    <div class="blog-post blog-post-style1 text-center text-md-left">
                        <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                            <a href="javascript:void(0)">
                                <img src="{{$news_item->getImagePath('thumbnail', 'normal')}}" alt="">
                            </a>
                        </div>
                        <div class="post-details">
                            <a href="javascript:void(0)"
                               class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">
                                {{Str::limit($news_item->translate(app()->getLocale())->title, 65)}}
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end post item -->
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{route('news', app()->getLocale())}}" class="btn btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top">Batafsil</a>
        </div>
    </div>
</section>
<!-- end News section -->
