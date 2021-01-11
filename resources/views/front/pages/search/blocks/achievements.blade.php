<section class="padding-20px-tb">
    <div class="container">
        <div class="row justify-content-center">
        @foreach($results as $result)
            <!-- start post item -->
                <div
                    class="col-10 col-lg-3 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom">
                    <div class="blog-post blog-post-style1 text-center text-md-left">
                        <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                            <a href="{{route('achievements.show',[app()->getLocale(),$result->translate(app()->getLocale())->slug] )}}">
                                <img src="{{$result->thumbnail ? $result->getImagePath('thumbnail', 'thumb') : asset('images/achievement.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="post-details">
                            <a href="{{route('achievements.show',[app()->getLocale(),$result->translate(app()->getLocale())->slug] )}}"
                               class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">
                                {{Str::limit($result->translate(app()->getLocale())->title, 65)}}
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end post item -->
            @endforeach
        </div>
        {{$results->appends($_GET)->links()}}
    </div>
</section>
