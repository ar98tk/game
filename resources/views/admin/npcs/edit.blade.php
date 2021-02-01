@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="box-header">
                <br>
                <h3 class="box-title"><strong>Edit NPC ( {{ $npcs->name }} )</strong></h3>
            </div>
            <br>
            <div class="col-lg-12 col-12">
                {!! Form::model($npcs,['route' => ['npcs.update' , $npcs->id], 'method' => 'put']) !!}
                <div class="row">
                    <div class="col-4">
                        {!! Form::label('id', 'ID') !!}
                        {!! Form::text('id', old('id',$npcs->id),['class'=>'form-control' ]) !!}
                        @error('id')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', old('name',$npcs->name),['class'=>'form-control' ]) !!}
                        @error('name')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('type', 'Type') !!}
                        {!! Form::text('type', old('type',$npcs->type),['class'=>'form-control' ]) !!}
                        @error('type')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-4">
                        {!! Form::label('lookface', 'Look Face') !!}
                        {!! Form::text('lookface', old('lookface',$npcs->lookface),['class'=>'form-control' ]) !!}
                        @error('lookface')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('mapid', 'Map Id') !!}
                        {!! Form::text('mapid', old('mapid',$npcs->mapid),['class'=>'form-control' ]) !!}
                        @error('mapid')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('cellx', 'Cell X') !!}
                        {!! Form::text('cellx', old('cellx',$npcs->cellx),['class'=>'form-control' ]) !!}
                        @error('cellx')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4">
                        {!! Form::label('celly', 'Cell Y') !!}
                        {!! Form::text('celly', old('celly',$npcs->celly),['class'=>'form-control' ]) !!}
                        @error('celly')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('effect', 'Effect') !!}
                        {!! Form::text('effect', old('effect',$npcs->effect),['class'=>'form-control' ]) !!}
                        @error('effect')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="form-group pt-4 text-center">
                    {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
                </div>
                {!!Form::close() !!}
            </div>

        </div>
    </div>
@endsection
