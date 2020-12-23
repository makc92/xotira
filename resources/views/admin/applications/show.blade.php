@php
    /**
     * @var \App\Models\Application $application
     *
     */
@endphp
@extends('adminlte::page')


@section('title', 'Book')

@section('content')
    <div class="row">
        <div class="col-9">
            @include('flash::message')
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-body">
                    <h4>ФИО</h4>
                    <p>{{$application->name}}</p>
                    <hr>
                    <h4>Телефон</h4>
                    <p>{{$application->phone}}</p>
                    <hr>
                    <h4>Email</h4>
                    <p>{{$application->email}}</p>
                    <hr>
                    <h4>Сообщение</h4>
                    <p>{{$application->message}}</p>
                    <hr>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    @if($application->photo)
                        <h4>Фотография</h4>
                        <img src="{{$application->getImagePath('photo', 'medium')}}" alt="">
                        <hr>
                    @endif
                    @if($application->document)
                        <h4>Документ</h4>
                            <a href="{{$application->getFilePath('document')}}" target="_blank">Открыть</a>
                        <hr>
                    @endif
                    <div class="d-flex mt-4">

                        <form method="POST" action="{{ route('admin.applications.destroy', $application->id) }}"
                              class="mx-2">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                    class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                        <a href="{{route('admin.applications.index')}}" class="btn btn-primary"><i
                                class="fas fa-angle-double-left"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

