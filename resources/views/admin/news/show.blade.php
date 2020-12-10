@php
    /**
     * @var \App\Models\News $news
     * @var \App\Models\NewsTranslation $news
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
                            <h4>{{$news->translate('uz')->title}}</h4>
                            <p>{!! $news->translate('uz')->content !!}</p>
                        </div>
                        {{--------------------------------oz latin--------------------------------}}
                        <div class="tab-pane fade" id="oz" role="tabpanel" aria-labelledby="profile-tab">
                            <h4>{{$news->translate('oz')->title}}</h4>
                            <p>{!! $news->translate('oz')->content !!}</p>
                        </div>
                        {{--------------------------------ru--------------------------------}}
                        <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="contact-tab">
                            <h4>{{$news->translate('ru')->title}}</h4>
                            <p>{!! $news->translate('ru')->content !!}</p>
                        </div>
                        {{--------------------------------en--------------------------------}}
                        <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="contact-tab">
                            <h4>{{$news->translate('en')->title}}</h4>
                            <p>{!! $news->translate('en')->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <p class="font-weight-bold">Thumbnail</p>
                    <img src="{{$news->getImagePath('thumbnail')}}" alt="" width="200">
                    <hr>
                    <div class="d-flex mt-4">
                        <a href="{{route('admin.news.edit', $news->id)}}" class="btn btn-info"><i
                                class="fas fa-pencil-alt"></i> Edit</a>
                        <form method="POST" action="{{ route('admin.news.destroy', $news->id) }}" class="mx-2">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                    class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                        <a href="{{route('admin.news.index')}}" class="btn btn-primary"><i
                                class="fas fa-angle-double-left"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

