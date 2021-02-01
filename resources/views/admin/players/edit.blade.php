@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="box-header">
                <br>
                <h3 class="box-title"><strong>Edit Player ( {{ $players->Owner }} )</strong></h3>
            </div>
            <br>
            <div class="col-lg-12 col-12">
                {!! Form::model($players,['route' => ['players.update' , $players->UID], 'method' => 'put']) !!}
                <div class="row">
                    <div class="col-4">
                        {!! Form::label('Owner', 'Owner') !!}
                        {!! Form::text('Owner', old('Owner',$players->Owner),['class'=>'form-control' ]) !!}
                        @error('Owner')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('Money', 'Money') !!}
                        {!! Form::text('Money', old('Money',$players->Money),['class'=>'form-control' ]) !!}
                        @error('Money')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('ConquerPoints', 'ConquerPoints') !!}
                        {!! Form::text('ConquerPoints', old('ConquerPoints',$players->ConquerPoints),['class'=>'form-control' ]) !!}
                        @error('ConquerPoints')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-4">
                        {!! Form::label('Level', 'Level') !!}
                        {!! Form::text('Level', old('Level',$players->Level),['class'=>'form-control' ]) !!}
                        @error('Level')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('WarehousePW', 'Bank PW') !!}
                        {!! Form::text('WarehousePW', old('WarehousePW',$players->WarehousePW),['class'=>'form-control' ]) !!}
                        @error('WarehousePW')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('Reborn', 'Reborn') !!}
                        {!! Form::text('Reborn', old('Reborn',$players->Reborn),['class'=>'form-control' ]) !!}
                        @error('Reborn')<span class="text-danger">{{$message}}</span>@enderror
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
