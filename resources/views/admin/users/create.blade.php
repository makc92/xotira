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
                    {!! Form::open(['route' => 'admin.users.store','id' => 'user-create'] ) !!}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        {{Form::label('name', 'Name (*)')}}
                                        {{Form::text('name',null ,['class' => 'form-control'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('email', 'Email(*)', ['class' => 'col-sm-5 col-form-label'])}}
                                        {{Form::text("email", null, ['class' => 'form-control'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('password', 'Password (*)', ['class' => 'col-sm-5 col-form-label', 'id'=>'password'])}}
                                        {{Form::text("password", null, ['class' => 'form-control'])}}
                                    </div>
                                    <buttot type="button" class="btn btn-dark" id="generatePassword" onClick="generate();">
                                        Generate
                                    </buttot>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-plus-square"></i> Create User
                                        </button>
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
@section('js')
    <script>
        let myForm = document.querySelector('#user-create');

        function randomPassword(length) {
            let chars = "abcdefghijklmnopqrstuvwxyz!@#$ABCDEFGHIJKLMNOP1234567890";
            let pass = "";
            for (let x = 0; x < length; x++) {
                let i = Math.floor(Math.random() * chars.length);
                pass += chars.charAt(i);
            }
            return pass;
        }

        function generate() {
            myForm.password.value = randomPassword(15);
        }


    </script>
@stop
