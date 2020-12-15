@extends('adminlte::page')
@section('title', 'Edit News')

@section('content_header')
    <h1 class="m-0 text-dark">Edit News</h1>
@stop

@section('content')
    @include('flash::message')
    @if ($errors->any())
        @include('layouts.errors')
    @endif
    {!! Form::open(['route' => ['admin.news.update',$news->id], 'method'=>'put','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-9">
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
                            <div class="form-group">
                                {{Form::label('uz_title', 'Заголовок (*)')}}
                                {{Form::text('uz_title', $news->translate('uz')->title, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('uz_content', 'Контент (*)')}}
                                {{Form::textarea('uz_content', $news->translate('uz')->content, $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------oz latin--------------------------------}}
                        <div class="tab-pane fade" id="oz" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group">
                                {{Form::label('oz_title', 'Заголовок (*)')}}
                                {{Form::text('oz_title', $news->translate('oz')->title, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('oz_content', 'Контент (*)')}}
                                {{Form::textarea('oz_content', $news->translate('oz')->content, $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------ru--------------------------------}}
                        <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                {{Form::label('ru_title', 'Заголовок (*)')}}
                                {{Form::text('ru_title', $news->translate('ru')->title, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('ru_content', 'Контент (*)')}}
                                {{Form::textarea('ru_content', $news->translate('ru')->content, $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------en--------------------------------}}
                        <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                {{Form::label('en_title', 'Заголовок (*)')}}
                                {{Form::text('en_title', $news->translate('en')->title, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('en_content', 'Контент (*)')}}
                                {{Form::textarea('en_content', $news->translate('en')->content, $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="form-group mb-4">
                        {{Form::label('thumbnail', 'Картинка', ['class' => 'col-form-label'])}} <br>
                        <i>Размер картинки не должен превышать <b>2МБ</b></i> <br>
                        <img src="{{$news->getImagePath('thumbnail')}}" alt="" width="200"> <br><br>
                        <div class="custom-file d-block">
                            {{Form::file('thumbnail', $attributes = ['class' => 'custom-file-input'])}}
                            {{Form::label('thumbnail', '', ['class' => 'custom-file-label'])}}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Update News</button>
                    <a href="{{route('admin.news.index')}}" class="btn btn-primary"><i
                            class="fas fa-angle-double-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop
@section('js')
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'ru_content', {
            filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace( 'uz_content', {
            filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });

        CKEDITOR.replace( 'en_content', {
            filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace( 'oz_content', {
            filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });

        bsCustomFileInput.init();


    </script>
@endsection
