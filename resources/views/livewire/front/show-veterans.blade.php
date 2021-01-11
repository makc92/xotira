<div>
    <section class="pt-4" id="memory">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-12 text-center margin-20px-bottom sm-margin-20px-bottom">
                    <div class="position-relative overflow-hidden w-100">
                        <form action="">
                            <input type="text" name="name" id="name" placeholder="{{__('form.search-text')}}" class="big-input"
                                   wire:model="searchVeteran">

                        </form>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 mb-2 text-center">
                    <div wire:loading.delay>
                        <img src="{{asset('images/wait.gif')}}" alt="">
                    </div>
                </div>
                <!-- start interactive banners item -->
                @if($veterans->isNotEmpty())
                    @foreach($veterans as $veteran)
                        <div class="col-10 col-xl-3 col-lg-4 col-md-6 sm-margin-30px-bottom text-center">
                            <div class="feature-box-16 sm-width-100 mb-3">
                                <img src="{{$veteran->thumbnail ? $veteran->getImagePath('thumbnail', 'medium') : asset('images/placeholder.jpg')}}" alt="">
                                <div class="feature-box-content text-center">
                                    <div class="opacity-full-dark bg-extra-dark-gray"></div>
                                    <div class="d-table h-100 w-100 position-relative">
                                        <div class="align-middle d-table-cell padding-15px-lr padding-20px-tb">
                                            <div
                                                class="text-white-2 alt-font text-medium margin-15px-bottom name">{{$veteran->name}}</div>
                                            <p class="width-85 mx-auto text-extra-light-gray description">{{$veteran->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->
                    @endforeach
                @else
                    <div class="col-12">
                        <p>Not Found</p>
                    </div>
                @endif

            </div>
            <!-- start slider pagination -->
            {{$veterans->links()}}
        </div>
        <!-- end slider pagination -->
    </section>
</div>
