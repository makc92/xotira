<section class="padding-20px-tb" id="memory">
    <div class="container position-relative">
        <div class="row">
            @if($results->isNotEmpty())
                @foreach($results as $result)
                    <div class="col-12 col-md-3 sm-margin-30px-bottom text-center">
                        <div class="feature-box-16 sm-width-100">
                            <img src="{{$result->thumbnail ? $result->getImagePath('thumbnail', 'medium') : asset('images/placeholder.jpg')}}" alt="">
                            <div class="feature-box-content text-center">
                                <div class="opacity-full-dark bg-extra-dark-gray"></div>
                                <div class="d-table h-100 w-100 position-relative">
                                    <div class="align-middle d-table-cell padding-15px-lr padding-20px-tb">
                                        <div class="text-white-2 alt-font text-medium margin-15px-bottom name">{{$result->name}}</div>
                                        <p class="width-85 mx-auto text-extra-light-gray description">{{$result->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        {{$results->appends($_GET)->links()}}
    </div>
</section>
