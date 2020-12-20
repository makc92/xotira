@extends('adminlte::page')
@section('title', 'Фотогаллерея')

@section('content_header')
    <h1 class="m-0 text-dark">Фотогаллерея</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            @include('flash::message')
            <a href="{{route('admin.photos.create')}}" class="btn bg-gradient-success mb-2"><i class="fas fa-plus-square"></i> Добавить фото</a>

            <div class="card">
                <div class="card-body">
                    <livewire:admin.show-photos />
                </div>
            </div>
        </div>
    </div>
@stop
