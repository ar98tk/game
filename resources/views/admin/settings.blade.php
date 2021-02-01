@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="box-header">
                <h1 class="box-title"><strong><u>Edit Settings</u></strong></h1>
            </div>
            <br>
            @include('admin.include.flash')
            <h3 class="box-title text-center"><strong><u>Main Settings</u></strong></h3>
            <br>
            <div class="col-lg-12 col-12">
                {!! Form::open(['url'=>'admin/settings']) !!}
                <div class="row">
                    <div class="col-4">
                        {!! Form::label('site_name', 'Site Name') !!}
                        {!! Form::text('site_name', old('site_name',setting()->site_name),['class'=>'form-control' ]) !!}
                        @error('site_name')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('client_link', 'Client Link') !!}
                        {!! Form::text('client_link', old('client_link',setting()->client_link),['class'=>'form-control' ]) !!}
                        @error('client_link')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('patch_link', 'Patch Link') !!}
                        {!! Form::text('patch_link', old('patch_link',setting()->patch_link),['class'=>'form-control' ]) !!}
                        @error('patch_link')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-4">
                        {!! Form::label('facebook', 'Facebook') !!}
                        {!! Form::text('facebook', old('facebook',setting()->facebook),['class'=>'form-control' ]) !!}
                        @error('facebook')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('twitter', 'Twitter') !!}
                        {!! Form::text('twitter', old('twitter',setting()->twitter),['class'=>'form-control' ]) !!}
                        @error('twitter')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('instagram', 'Instagram') !!}
                        {!! Form::text('instagram', old('instagram',setting()->instagram),['class'=>'form-control' ]) !!}
                        @error('instagram')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-4">
                        {!! Form::label('youtube', 'Youtube') !!}
                        {!! Form::text('youtube', old('youtube',setting()->youtube),['class'=>'form-control' ]) !!}
                        @error('youtube')<span class="text-danger">{{$message}}</span>@enderror
                    </div>

                    <div class="col-4">
                        {!! Form::label('skype', 'Skype') !!}
                        {!! Form::text('skype', old('skype',setting()->skype),['class'=>'form-control' ]) !!}
                        @error('skype')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('url', 'Site Domain') !!}
                        {!! Form::text('url', old('url',setting()->url),['class'=>'form-control' ]) !!}
                        @error('url')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-4">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email', old('email',setting()->email),['class'=>'form-control' ]) !!}
                        @error('email')<span class="text-danger">{{$message}}</span>@enderror
                    </div>

                    <div class="col-4">
                        {!! Form::label('phone', 'Phone') !!}
                        {!! Form::text('phone', old('phone',setting()->phone),['class'=>'form-control' ]) !!}
                        @error('phone')<span class="text-danger">{{$message}}</span>@enderror
                    </div>

                </div>
                <br>

                <br>
                <h3 class="box-title text-center"><strong><u>Store Prices</u></strong></h3>
                <br>
                <div class="row">
                    <div class="col-4">
                        {!! Form::label('cup_price', 'Cup') !!}
                        {!! Form::text('cup_price', old('cup_price',setting()->cup_price),['class'=>'form-control' ]) !!}
                        @error('cup_price')<span class="text-danger">{{$message}}</span>@enderror
                    </div>

                    <div class="col-4">
                        {!! Form::label('billion_cps_price', 'Billion CPS') !!}
                        {!! Form::text('billion_cps_price', old('billion_cps_price',setting()->billion_cps_price),['class'=>'form-control' ]) !!}
                        @error('billion_cps_price')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('ten_billion_cps_price', '10 Billions CPS') !!}
                        {!! Form::text('ten_billion_cps_price', old('ten_billion_cps_price',setting()->ten_billion_cps_price),['class'=>'form-control' ]) !!}
                        @error('ten_billion_cps_price')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <br>
                <div class="row">


                    <div class="col-4">
                        {!! Form::label('vip_7_price', 'VIP 7') !!}
                        {!! Form::text('vip_7_price', old('vip_7_price',setting()->vip_7_price),['class'=>'form-control' ]) !!}
                        @error('vip_7_price')<span class="text-danger">{{$message}}</span>@enderror
                    </div>

                    <div class="col-4">
                        {!! Form::label('full_perfection_price', 'Full Perfection') !!}
                        {!! Form::text('full_perfection_price', old('full_perfection_price',setting()->full_perfection_price),['class'=>'form-control' ]) !!}
                        @error('full_perfection_price')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        {!! Form::label('king_month', 'King Month') !!}
                        {!! Form::text('king_month', old('king_month',setting()->king_month),['class'=>'form-control' ]) !!}
                        @error('king_month')<span class="text-danger">{{$message}}</span>@enderror
                    </div>

                </div>
                <div class="form-group pt-4 text-center">
                    {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                </div>
                {!!Form::close() !!}
            </div>

        </div>
    </div>
@endsection
