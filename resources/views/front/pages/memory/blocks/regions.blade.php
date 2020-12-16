<div class="col-12 text-center btn-dual justify-content-center">
    @foreach($regionList as $key => $value)
    <a class="btn btn-very-small
    btn-transparent-black lg-margin-15px-bottom
    d-lg-inline-block md-margin-lr-auto"
    href="{{route('memory.regions', [app()->getLocale(), $value])}}">{{__('regions.' . $value)}}</a>
    @endforeach
</div>
