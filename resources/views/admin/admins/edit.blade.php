@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="box-header">
                <br>
                <h3 class="box-title"><strong>Edit Account ( {{ $admins->name }} )</strong></h3>
            </div>
            <br>
            <div class="col-lg-12 col-12">
                {!! Form::model($admins,['route' => ['admins.update' , $admins->id], 'method' => 'put']) !!}
                <div class="row">
                    <div class="col-6">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', old('name',$admins->name),['class'=>'form-control' ]) !!}
                        @error('name')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-6">
                        {!! Form::label('username', 'Username') !!}
                        {!! Form::text('username', old('name',$admins->username),['class'=>'form-control' ]) !!}
                        @error('username')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('email',$admins->email),['class'=>'form-control' ]) !!}
                        @error('email')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-6">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class'=>'form-control' ]) !!}
                        @error('password')<span class="text-danger">{{$message}}</span>@enderror
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
