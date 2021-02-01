@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <br><br>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h3 class="m-0 font-weight-bold text-primary">Message From ( {{ $messages->name }})</h3>
                <div class="ml-auto">
                    <a href="{{ url('admin/messages') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                        <span class="text">Messages</span>
                    </a>
                </div>
            </div>
            <br>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tbody>
                        <tr>
                            <th class="text-center">Title</th>
                            <td class="text-center">{{ $messages->title }}</td>
                        </tr>
                        <tr>
                            <th class="text-center">From</th>
                            <td class="text-center">{{ $messages->name }} </td>
                        </tr>
                        <tr>
                            <th class="text-center">Email</th>
                            <td class="text-center">{{ $messages->email }} </td>
                        </tr>
                        <tr>
                            <th class="text-center">Mobile</th>
                            <td class="text-center">{{ isset($messages->mobile) ? $messages->mobile : 'User didn\'t enter mobile number' }} </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                <br>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex">
                    <h6 class="m-0 font-weight-bold text-primary">Message Content</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                            <tr>
                                <td colspan="4">{{ $messages->message }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
