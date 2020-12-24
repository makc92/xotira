
<div class="container mt-5" >
    <div class="row">
        <div class="col-12 text-center justify-content-center">
            @foreach($regionList as $key => $value)
                <a class="btn btn-very-small
    btn-transparent-black
    d-lg-inline-block" style="margin: 10px"
                   href="{{route('memory.regions', [app()->getLocale(), $value])}}">{{__('regions.' . $value)}}</a>
            @endforeach
        </div>
    </div>
</div>
