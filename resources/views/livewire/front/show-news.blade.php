<div>
    <section id="news">
        <div class="container">
            <div class="row justify-content-center">
            @foreach($news as $news_item)
                <!-- start post item -->
                    <div
                        class="col-10 col-lg-3 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom">
                        <div class="blog-post blog-post-style1 text-center text-md-left">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                <a href="{{route('news.show',[app()->getLocale(),$news_item->translate(app()->getLocale())->slug] )}}">
                                    <img src="{{$news_item->thumbnail ? $news_item->getImagePath('thumbnail', 'thumb') : asset('images/fakernews.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="post-details">
                                <a href="{{route('news.show',[app()->getLocale(),$news_item->translate(app()->getLocale())->slug] )}}"
                                   class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">
                                    {{Str::limit($news_item->translate(app()->getLocale())->title, 65)}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end post item -->
                @endforeach
            </div>
            {{$news->links()}}
        </div>
    </section>
</div>
