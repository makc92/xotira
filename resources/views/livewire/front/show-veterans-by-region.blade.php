<div>
    <section class="" id="memory">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-12 text-center margin-50px-bottom sm-margin-40px-bottom">
                    <div class="position-relative overflow-hidden w-100">
                        <form action="">
                            <input type="text" name="name" id="name" placeholder="Qidiruv" class="big-input" wire:model="searchVeteran">

                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-5">
                    @php($array = ['A', 'B', 'C', 'D'])
                    @foreach($array as $arr)
                        <button wire:click="search('{{ $arr}}')">{{$arr}}</button>
                    @endforeach
                </div>
                <div class="col-12 mb-5">
                    <div wire:loading.delay>
                        Processing Payment...
                    </div>
                </div>

                <!-- start interactive banners item -->
                @if($veterans->isNotEmpty())
                    @foreach($veterans as $veteran)
                        <div class="col-12 col-md-3 sm-margin-30px-bottom text-center">
                            <div class="feature-box-16 sm-width-100">
                                <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                <div class="feature-box-content text-center">
                                    <div class="opacity-full-dark bg-extra-dark-gray"></div>
                                    <div class="d-table h-100 w-100 position-relative">
                                        <div class="align-middle d-table-cell padding-15px-lr padding-20px-tb">
                                            <div class="text-white-2 alt-font text-medium margin-15px-bottom name">{{$veteran->name}} - {{$veteran->region->title}}</div>
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
</div>
</section>
</div>
