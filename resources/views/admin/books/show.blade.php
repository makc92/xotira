@php
    /**
     * @var \App\Models\Book $book
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
                    <h4>UZ</h4>
                    <p>{{$book->description['uz']}}</p>
                    <hr>
                    <h4>OZ</h4>
                    <p>{{$book->description['oz']}}</p>
                    <hr>
                    <h4>RU</h4>
                    <p>{{$book->description['ru']}}</p>
                    <hr>
                    <h4>EN</h4>
                    <p>{{$book->description['en']}}</p>
                    <hr>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <p class="font-weight-bold">Название книги</p>
                    <p>{{$book->title}}</p>
                    <hr>
                    <p class="font-weight-bold">Картинка</p>
                    <img src="{{$book->getImagePath('thumbnail')}}" alt="" width="200">
                    <hr>
                    <p class="font-weight-bold">Book</p>
                    <a href="{{$book->getFilePath('book')}}" target="_blank">{{$book->title}}</a>
                    <div class="d-flex mt-4">
                        <a href="{{route('admin.books.edit', $book->id)}}" class="btn btn-info"><i
                                class="fas fa-pencil-alt"></i> Edit</a>
                        <form method="POST" action="{{ route('admin.books.destroy', $book->id) }}" class="mx-2">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                    class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                        <a href="{{route('admin.books.index')}}" class="btn btn-primary"><i
                                class="fas fa-angle-double-left"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

