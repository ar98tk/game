@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="box-header">
                <br>
                <h3 class="box-title"><strong>Edit Guild ( {{ $guilds->Name }} )</strong></h3>
            </div>
            <br>
            <div class="col-lg-12 col-12">
                {!! Form::model($guilds,['route' => ['guilds.update' , $guilds->ID], 'method' => 'put']) !!}
                <div class="row">
                    <div class="col-4">
                        {!! Form::label('LeaderName', 'Leader Name') !!}
                        {!! Form::text('LeaderName', old('LeaderName',$guilds->LeaderName),['class'=>'form-control','readonly' ]) !!}
                        @error('LeaderName')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('Name', 'Guild Name') !!}
                        {!! Form::text('Name', old('Name',$guilds->Name),['class'=>'form-control' ]) !!}
                        @error('Name')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('Bulletin', 'Bulletin') !!}
                        {!! Form::text('Bulletin', old('Bulletin',$guilds->Bulletin),['class'=>'form-control' ]) !!}
                        @error('Bulletin')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>

                <div class="row">

                    <div class="col-4">
                        {!! Form::label('Wins', 'Wins') !!}
                        {!! Form::text('Wins', old('Wins',$guilds->Wins),['class'=>'form-control' ]) !!}
                        @error('Wins')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('LevelRequirement', 'LevelRequirement') !!}
                        {!! Form::text('LevelRequirement', old('LevelRequirement',$guilds->LevelRequirement),['class'=>'form-control' ]) !!}
                        @error('LevelRequirement')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('RebornRequirement', 'RebornRequirement') !!}
                        {!! Form::text('RebornRequirement', old('RebornRequirement',$guilds->RebornRequirement),['class'=>'form-control' ]) !!}
                        @error('RebornRequirement')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4">
                        {!! Form::label('SilverFund', 'Silver Fund') !!}
                        {!! Form::text('SilverFund', old('SilverFund',$guilds->SilverFund),['class'=>'form-control' ]) !!}
                        @error('SilverFund')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('ConquerPointFund', 'CPS Fund') !!}
                        {!! Form::text('ConquerPointFund', old('ConquerPointFund',$guilds->ConquerPointFund),['class'=>'form-control' ]) !!}
                        @error('ConquerPointFund')<span class="text-danger">{{$message}}</span>@enderror
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
