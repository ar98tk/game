@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="box-header">
                <br>
                <h3 class="box-title"><strong>Edit Nobility ( {{ $nobility->EntityName }} )</strong></h3>
            </div>
            <br>
            <div class="col-lg-12 col-12">
                {!! Form::model($nobility,['route' => ['nobility.update' , $nobility->EntityUID], 'method' => 'put']) !!}

                <div class="col-4">
                    {!! Form::label('EntityUID', 'Player UID') !!}
                    {!! Form::text('EntityUID', old('EntityUID',$nobility->EntityUID),['class'=>'form-control','readonly' ]) !!}
                    @error('EntityUID')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <br>
                <div class="col-4">
                    {!! Form::label('EntityName', 'Player Name') !!}
                    {!! Form::text('EntityName', old('EntityName',$nobility->EntityName),['class'=>'form-control','readonly' ]) !!}
                    @error('EntityName')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <br>
                <div class="col-4">
                    {!! Form::label('Donation', 'Donation') !!}
                    {!! Form::text('Donation', old('Donation',$nobility->Donation),['class'=>'form-control' ]) !!}
                    @error('Donation')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group pt-4">
                    {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
                </div>

            </div>

            {!!Form::close() !!}
        </div>

    </div>
    </div>
@endsection
