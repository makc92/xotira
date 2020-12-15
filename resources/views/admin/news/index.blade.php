@extends('adminlte::page')
@section('title', 'News')

@section('content_header')
    <h1 class="m-0 text-dark">News</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            @include('flash::message')
            <a href="{{route('admin.news.create')}}" class="btn bg-gradient-success mb-2"><i class="fas fa-plus-square"></i> Create News</a>
            <div class="card">
                <div class="card-body">
                    <livewire:admin.show-news />
                </div>
            </div>
        </div>
    </div>
@stop
