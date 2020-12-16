@extends('adminlte::page')
@section('title', 'Edit Veteran')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Veteran</h1>
@stop

@section('content')
    @if ($errors->any())
        @include('layouts.errors')
    @endif
    @include('flash::message')
    {!! Form::open(['route' => ['admin.memory.update',$veteran->id], 'method'=>'put','enctype' => 'multipart/form-data']) !!}

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
                                {{Form::text('uz_name', $veteran->translate('uz')->name, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('uz_description', 'Краткое описание (*)')}}
                                {{Form::textarea('uz_description', $veteran->translate('uz')->description, $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------oz latin--------------------------------}}
                        <div class="tab-pane fade" id="oz" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group">
                                {{Form::label('oz_name', 'ФИО (*)')}}
                                {{Form::text('oz_name', $veteran->translate('oz')->name, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('oz_description', 'Краткое описание (*)')}}
                                {{Form::textarea('oz_description', $veteran->translate('oz')->description, $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------ru--------------------------------}}
                        <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                {{Form::label('ru_name', 'ФИО (*)')}}
                                {{Form::text('ru_name', $veteran->translate('ru')->name, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('ru_description', 'Краткое описание (*)')}}
                                {{Form::textarea('ru_description', $veteran->translate('ru')->description, $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------en--------------------------------}}
                        <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                {{Form::label('en_name', 'ФИО (*)')}}
                                {{Form::text('en_name', $veteran->translate('en')->name, $attributes = ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('en_description', 'Краткое описание (*)')}}
                                {{Form::textarea('en_description', $veteran->translate('en')->description, $attributes = ['class' => 'form-control'])}}
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
                        <i>Размер картинки не должен превышать <b>1МБ</b></i> <br> <br>
                        <img src="{{$veteran->getImagePath('thumbnail')}}" alt="" width="100"> <br><br>
                        <div class="custom-file d-block">
                            {{Form::file('thumbnail', $attributes = ['class' => 'custom-file-input'])}}
                            {{Form::label('thumbnail', '', ['class' => 'custom-file-label'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('region', 'Регион (*)')}}
                        {{Form::select('region_id', $regionList, $selectedRegion ,['class' => 'form-control'])}}
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Update Veteran</button>
                    <a href="{{route('admin.memory.index')}}" class="btn btn-primary"><i
                            class="fas fa-angle-double-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop
@section('js')
    <script>
        bsCustomFileInput.init();
    </script>
@endsection

