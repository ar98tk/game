@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="box-header">
                <br>
                <h3 class="box-title"><strong>Create Admin</strong></h3>
            </div>
            <br>
            <div class="col-lg-12 col-12">
                {!! Form::open(['route' => 'admins.create']) !!}
                <div class="row">
                    <div class="col-6">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', old('name'),['class'=>'form-control' ]) !!}
                        @error('name')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-6">
                        {!! Form::label('username', 'Username') !!}
                        {!! Form::text('username', old('username'),['class'=>'form-control' ]) !!}
                        @error('username')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('email'),['class'=>'form-control' ]) !!}
                        @error('email')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-6">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class'=>'form-control' ]) !!}
                        @error('password')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="form-group pt-4 text-center">
                    {!! Form::submit('Create', ['class' => 'btn btn-info']) !!}
                </div>
                {!!Form::close() !!}
            </div>

        </div>
    </div>
@endsection
