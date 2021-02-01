@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="card-body">

            @include('admin.include.flash')

            <div class="box-header">
                <h1 class="box-title"> <strong><u>Nobility</u></strong></h1>
            </div>
            <br>

            {{ $dataTable->table([ 'class' =>'dataTable table table-bordered table-striped table-hover'], true) }}


        </div>
@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush
