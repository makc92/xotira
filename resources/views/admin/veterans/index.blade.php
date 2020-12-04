@extends('adminlte::page')
@section('title', 'Veterans')
@section('plugins.Datatables', true)

@section('content_header')
    <h1 class="m-0 text-dark">Veterans</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            @include('flash::message')
            <a href="{{route('admin.veterans.create')}}" class="btn bg-gradient-success mb-2"><i class="fas fa-plus-square"></i> Create Veteran</a>
            <div class="card">
                <div class="card-body">
                    <livewire:show-veterans />
                </div>
            </div>
        </div>
    </div>
@stop
