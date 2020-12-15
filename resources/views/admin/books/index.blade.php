@extends('adminlte::page')
@section('title', 'Электронная библиотека')

@section('content_header')
    <h1 class="m-0 text-dark">Электронная библиотека</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            @include('flash::message')
            <a href="{{route('admin.books.create')}}" class="btn bg-gradient-success mb-2"><i class="fas fa-plus-square"></i> Добавить книгу</a>
            <div class="card">
                <div class="card-body">
                    <livewire:admin.show-books />
                </div>
            </div>
        </div>
    </div>
@stop
