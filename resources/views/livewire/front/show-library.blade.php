<div>
    <section>
        <div class="container">
            <div class="row">
                @foreach($books as $book)
                <div class="col-12 col-lg-3 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom">
                    <div class="blog-post blog-post-style1 text-center text-md-left">
                        <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                            <a href="javascript:void(0);">
                                <img src="{{asset('images/elbook.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="post-details text-center">
                            <p class="mb-3"> {{Str::limit($book->description[app()->getLocale()], 50)}}</p>
                            <a class="btn btn-very-small btn-dark-gray btn-rounded lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto" href="javascript:void(0);">ko`chrib olish</a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <!-- start slider pagination -->
            {{$books->links()}}
            <!-- end slider pagination -->
        </div>
    </section>
</div>
