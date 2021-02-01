@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="box-header">
                <br>
                <h3 class="box-title"><strong>Create Account</strong></h3>
            </div>
            <br>
            <div class="col-lg-12 col-12">
                {!! Form::open(['route' => 'accounts.create']) !!}
                <div class="row">
                    <div class="col-6">
                        {!! Form::label('Username', 'Username') !!}
                        {!! Form::text('Username', old('Username'),['class'=>'form-control' ]) !!}
                        @error('Username')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-6">
                        {!! Form::label('Password', 'Password') !!}
                        {!! Form::text('Password', old('Password'),['class'=>'form-control' ]) !!}
                        @error('Password')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        {!! Form::label('Email', 'Email') !!}
                        {!! Form::email('Email', old('Email'),['class'=>'form-control' ]) !!}
                        @error('Email')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-6">
                        {!! Form::label('MobileNumber', 'Mobile') !!}
                        {!! Form::text('MobileNumber', old('MobileNumber'),['class'=>'form-control' ]) !!}
                        @error('MobileNumber')<span class="text-danger">{{$message}}</span>@enderror
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
