@php
    /**
     * @var \App\Models\Veteran $veteran
     * @var \App\Models\VeteranTranslation $veteran
     */
@endphp
@extends('adminlte::page')


@section('title', 'Veteran')

@section('content_header')
    <h1 class="m-0 text-dark">Veteran</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-9">
            @include('flash::message')
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs nav-justified" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#uz"
                               role="tab" aria-controls="custom-tabs-three-messages" aria-selected="true">Latin
                             </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#oz"
                               role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Kiril</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#ru"
                               role="tab" aria-controls="custom-tabs-three-messages" aria-selected="true">Русский</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#en"
                               role="tab" aria-controls="custom-tabs-three-messages" aria-selected="true">Английский</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-two-tabContent">
                        {{--------------------------------uz kiril--------------------------------}}
                        <div class="tab-pane fade show active" id="uz" role="tabpanel" aria-labelledby="home-tab">
                            <h4>{{$veteran->translate('uz')->name}}</h4>
                            <p>{{$veteran->translate('uz')->description}}</p>
                        </div>
                        {{--------------------------------oz latin--------------------------------}}
                        <div class="tab-pane fade" id="oz" role="tabpanel" aria-labelledby="profile-tab">
                            <h4>{{$veteran->translate('oz')->name}}</h4>
                            <p>{{$veteran->translate('oz')->description}}</p>
                        </div>
                        {{--------------------------------ru--------------------------------}}
                        <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="contact-tab">
                            <h4>{{$veteran->translate('ru')->name}}</h4>
                            <p>{{$veteran->translate('ru')->description}}</p>
                        </div>
                        {{--------------------------------en--------------------------------}}
                        <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="contact-tab">
                            <h4>{{$veteran->translate('en')->name}}</h4>
                            <p>{{$veteran->translate('en')->description}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <p class="font-weight-bold">Thumbnail</p>
                    <img src="{{$veteran->thumbnail}}" alt="">
                    <hr>
                    <p class="font-weight-bold">Region</p>
                    {{$veteran->region}}
                    <hr>
                    <div class="d-flex mt-4">
                        <a href="{{route('admin.veterans.edit', $veteran)}}" class="btn btn-info"><i
                                class="fas fa-pencil-alt"></i> Edit</a>
                        <form method="POST" action="{{ route('admin.veterans.destroy', $veteran) }}" class="mx-2">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                    class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                        <a href="{{route('admin.veterans.index')}}" class="btn btn-primary"><i
                                class="fas fa-angle-double-left"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

