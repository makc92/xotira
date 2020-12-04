@extends('adminlte::page')
@section('title', 'Users')

@section('content_header')
    <h1 class="m-0 text-dark">Users</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                        {!! Form::open(['route' => ['admin.users.update',$user->id], 'method'=>'put', 'id' => 'user-create'] ) !!}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        {{Form::label('name', 'Name (*)')}}
                                        {{Form::text('name',$user->name ,['class' => 'form-control'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('email', 'Email(*)', ['class' => 'col-sm-5 col-form-label'])}}
                                        {{Form::text("email", $user->email, ['class' => 'form-control'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('password', 'Password (*)', ['class' => 'col-sm-5 col-form-label', 'id'=>'password'])}}
                                        {{Form::text("password", null, ['class' => 'form-control'])}}
                                    </div>
                                    <buttot type="button" class="btn btn-dark" id="generatePassword" onClick="generate();">
                                        Generate
                                    </buttot>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Update User</button>
                                        <a href="{{route('admin.users.index')}}" class="btn btn-primary"><i
                                                class="fas fa-angle-double-left"></i> Back</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop
