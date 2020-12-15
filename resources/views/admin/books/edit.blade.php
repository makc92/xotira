@extends('adminlte::page')
@section('title', 'Update Book')

@section('content_header')
    <h1 class="m-0 text-dark">Обновить книгу</h1>
@stop

@section('content')
    @include('flash::message')
    @if ($errors->any())
        @include('layouts.errors')
    @endif

    {!! Form::open(['route' => ['admin.books.update',$book->id], 'method'=>'put','enctype' => 'multipart/form-data']) !!}
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
                                {{Form::label('description[uz]', 'Описание книги (*)')}}
                                {{Form::textarea('description[uz]', $book->description['uz'], $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------oz latin--------------------------------}}
                        <div class="tab-pane fade" id="oz" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group">
                                {{Form::label('description[oz]', 'Описание книги (*)')}}
                                {{Form::textarea('description[oz]', $book->description['oz'], $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------ru--------------------------------}}
                        <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                {{Form::label('description[ru]', 'Описание книги (*)')}}
                                {{Form::textarea('description[ru]', $book->description['ru'], $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                        {{--------------------------------en--------------------------------}}
                        <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                {{Form::label('description[en]', 'Описание книги (*)')}}
                                {{Form::textarea('description[en]', $book->description['en'], $attributes = ['class' => 'form-control'])}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        {{Form::label('title', 'Название книги (*)')}}
                        {{Form::text('title', $book->title, $attributes = ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group mb-4">
                        {{Form::label('thumbnail', 'Картинка', ['class' => 'col-form-label'])}} <br>
                        <img src="{{$book->getImagePath('thumbnail','thumb')}}" alt="" width="100"> <br><br>
                        <i>Размер картинки не должен превышать <b>1МБ</b></i> <br> <br>
                        <div class="custom-file d-block">
                            {{Form::file('thumbnail', $attributes = ['class' => 'custom-file-input'])}}
                            {{Form::label('thumbnail', '', ['class' => 'custom-file-label'])}}
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        {{Form::label('book', 'Книга', ['class' => 'col-form-label'])}} <br>
                        <a href="{{$book->getFilePath('book')}}" target="_blank">{{$book->title}}</a> <br> <br>
                        {{--<i>Размер картинки не должен превышать <b>2МБ</b></i> <br>--}}
                        <div class="custom-file d-block">
                            {{Form::file('book', $attributes = ['class' => 'custom-file-input'])}}
                            {{Form::label('book', '', ['class' => 'custom-file-label'])}}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Обновить книгу</button>
                    <a href="{{route('admin.books.index')}}" class="btn btn-primary"><i
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
