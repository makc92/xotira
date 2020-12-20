@extends('adminlte::page')
@section('title', 'Create Photo')

@section('content_header')
    <h1 class="m-0 text-dark">Create Photo</h1>
@stop

@section('content')
    @include('flash::message')
    @if ($errors->any())
        @include('layouts.errors')
    @endif
    {!! Form::open(['route' => 'admin.photos.store', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group mb-4">
                        {{Form::label('thumbnail', 'Картинка', ['class' => 'col-form-label'])}} <br>
                        <div class="custom-file d-block">
                            {{Form::file('thumbnail', $attributes = ['class' => 'custom-file-input'])}}
                            {{Form::label('thumbnail', '', ['class' => 'custom-file-label'])}}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-plus-square"></i> Добавить фото</button>
                    <a href="{{route('admin.photos.index')}}" class="btn btn-primary"><i
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
