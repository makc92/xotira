@extends('adminlte::page')
@section('title', 'Achievements')

@section('content_header')
    <h1 class="m-0 text-dark">Подвиги</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            @include('flash::message')
            <a href="{{route('admin.achievements.create')}}" class="btn bg-gradient-success mb-2"><i class="fas fa-plus-square"></i> Добавить подвиг</a>
            <div class="card">
                <div class="card-body">
                    <livewire:admin.show-achievements />
                </div>
            </div>
        </div>
    </div>
@stop
