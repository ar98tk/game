@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="box-header">
                <br>
                <h3 class="box-title"><strong>Edit Account ( {{ $accounts->Username }} )</strong></h3>
            </div>
            <br>
            <div class="col-lg-12 col-12">
                {!! Form::model($accounts,['route' => ['accounts.update' , $accounts->Username], 'method' => 'put']) !!}
                <div class="row">
                    <div class="col-4">
                        {!! Form::label('Username', 'Username') !!}
                        {!! Form::text('Username', old('Username',$accounts->Username),['class'=>'form-control' ]) !!}
                        @error('Username')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('Password', 'Password') !!}
                        {!! Form::text('Password', old('Password',$accounts->Password),['class'=>'form-control' ]) !!}
                        @error('Password')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('IP', 'IP') !!}
                        {!! Form::text('IP', old('IP',$accounts->IP),['class'=>'form-control' ]) !!}
                        @error('IP')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-4">
                        {!! Form::label('Email', 'Email') !!}
                        {!! Form::text('Email', old('Email',$accounts->Email),['class'=>'form-control' ]) !!}
                        @error('Email')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('MobileNumber', 'Mobile') !!}
                        {!! Form::text('MobileNumber', old('MobileNumber',$accounts->MobileNumber),['class'=>'form-control' ]) !!}
                        @error('MobileNumber')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('State', 'State') !!}
                        {!! Form::text('State', old('Reborn',$accounts->State),['class'=>'form-control' ]) !!}
                        @error('State')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="form-group pt-4 text-center">
                    {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
                </div>
                {!!Form::close() !!}
            </div>

        </div>
    </div>
@endsection
