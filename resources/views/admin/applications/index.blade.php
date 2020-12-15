@extends('adminlte::page')
@section('title', 'Заявки')

@section('content_header')
    <h1 class="m-0 text-dark">Заявки с сайта</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            @include('flash::message')
            <div class="card">
                <div class="card-body">
                    <livewire:admin.show-applications />
                </div>
            </div>
        </div>
    </div>
@stop
