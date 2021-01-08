<section class="wow fadeIn bg-light-gray" id="teams">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                <h4 class="alt-font text-extra-dark-gray font-weight-600 text-center mb-5 heading">{{__('about_muzeum.teams')}}</h4>
            </div>
        </div>
        <div class="row">
            <!-- start team item -->
            @foreach($teams as $team)
            <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow fadeInRight">
                <figure>
                    <div class="team-image sm-width-100 text-center">
                        <img src="{{$team->thumbnail ? $team->getImagePath('thumbnail', 'medium') : 'http://placehold.it/599x612' }}" alt="">
                    </div>
                    <figcaption>
                        <div class="team-member-position margin-20px-top text-center">
                            <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">{{$team->translate(app()->getLocale())->name}}</div>
                            <div class="text-extra-small text-uppercase text-medium-gray mb-3">{{$team->translate(app()->getLocale())->position}}</div>
                            <a href="{{route('museum.teams.show',[app()->getLocale(),$team->translate(app()->getLocale())->slug] )}}" class="btn btn-small btn-gold btn-rounded">{{__('buttons.more')}}</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            @endforeach
            <!-- end team item -->
        </div>
    </div>
</section>
