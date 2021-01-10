@extends('adminlte::page')
@section('name', 'Добавить Администратора')

@section('content_header')
    <h1 class="m-0 text-dark">Добавить Администратора</h1>
@stop

@section('content')
    @include('flash::message')
    @if ($errors->any())
        @include('layouts.errors')
    @endif
    {!! Form::open(['route' => 'admin.teams.store', 'enctype' => 'multipart/form-data']) !!}
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
                                {{Form::label('uz_name', 'ФИО (*)')}}
                                {{Form::text('uz_name', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('uz_position', 'Должность (*)')}}
                                {{Form::text('uz_position', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('uz_bio', 'Биография (*)')}}
                                {{Form::textarea('uz_bio', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('uz_days', 'Дни приёма')}}
                                {{Form::textarea('uz_days', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('uz_activity', 'Деятельность (*)')}}
                                {{Form::textarea('uz_activity', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------oz latin--------------------------------}}
                        <div class="tab-pane fade" id="oz" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group">
                                {{Form::label('oz_name', 'ФИО (*)')}}
                                {{Form::text('oz_name', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('oz_position', 'Должность (*)')}}
                                {{Form::text('oz_position', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('oz_bio', 'Биография (*)')}}
                                {{Form::textarea('oz_bio', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('oz_days', 'Дни приёма')}}
                                {{Form::textarea('oz_days', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('oz_activity', 'Деятельность (*)')}}
                                {{Form::textarea('oz_activity', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------ru--------------------------------}}
                        <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                {{Form::label('ru_name', 'ФИО (*)')}}
                                {{Form::text('ru_name', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('ru_position', 'Должность (*)')}}
                                {{Form::text('ru_position', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('ru_bio', 'Биография (*)')}}
                                {{Form::textarea('ru_bio', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('ru_days', 'Дни приёма')}}
                                {{Form::textarea('ru_days', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('ru_activity', 'Деятельность (*)')}}
                                {{Form::textarea('ru_activity', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------en--------------------------------}}
                        <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                {{Form::label('en_name', 'ФИО (*)')}}
                                {{Form::text('en_name', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('en_position', 'Должность (*)')}}
                                {{Form::text('en_position', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('en_bio', 'Биография (*)')}}
                                {{Form::textarea('en_bio', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('en_days', 'Дни приёма')}}
                                {{Form::textarea('en_days', null, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('en_activity', 'Деятельность (*)')}}
                                {{Form::textarea('en_activity', null, $attributes = ['class' => 'form-control'])}}
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
                        {{Form::label('thumbnail', 'Фото', ['class' => 'col-form-label'])}} <br>
                        <i>Размер картинки не должен превышать <b>2МБ</b></i> <br> <br>
                        <div class="custom-file d-block">
                            {{Form::file('thumbnail', $attributes = ['class' => 'custom-file-input'])}}
                            {{Form::label('thumbnail', '', ['class' => 'custom-file-label'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('order', 'Очередь (*)')}}
                        {{Form::number('order', null, $attributes = ['class' => 'form-control'])}}
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-plus-square"></i> Добавить</button>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop
@section('js')
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.config.removeButtons = 'Image';

        CKEDITOR.replace('ru_bio');
        CKEDITOR.replace('uz_bio');
        CKEDITOR.replace('en_bio');
        CKEDITOR.replace('oz_bio');

        CKEDITOR.replace('ru_days');
        CKEDITOR.replace('uz_days');
        CKEDITOR.replace('en_days');
        CKEDITOR.replace('oz_days');

        CKEDITOR.replace('ru_activity');
        CKEDITOR.replace('uz_activity');
        CKEDITOR.replace('en_activity');
        CKEDITOR.replace('oz_activity');

        bsCustomFileInput.init();


    </script>
@endsection
