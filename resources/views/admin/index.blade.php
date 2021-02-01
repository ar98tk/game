@extends('layouts.app')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{\App\User::count()}}</h3>

                                <p>Admins</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-user-shield"></i>
                            </div>
                            <a href="{{route('admin.admins')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{\App\Models\Account::count()}}</h3>

                                <p>Accounts</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-user"></i>
                            </div>
                            <a href="{{route('admin.accounts')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{\App\Models\Player::count()}}</h3>

                                <p>Characters</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-desktop"></i>
                            </div>
                            <a href="{{route('admin.players')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{\App\Models\Nobility::count()}}</h3>

                                <p>Nobility</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-chart-bar"></i>
                            </div>
                            <a href="{{route('admin.nobility')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <br><br>
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-maroon">
                            <div class="inner">
                                <h3>{{\App\Models\Guild::count()}}</h3>

                                <p>Guilds</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-synagogue"></i>
                            </div>
                            <a href="{{route('admin.guilds')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-dark">
                            <div class="inner">
                                <h3>{{\App\Models\Npc::count()}}</h3>

                                <p>NPCs</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fab fa-d-and-d"></i>
                            </div>
                            <a href="{{route('admin.npcs')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-indigo">
                            <div class="inner">
                                <h3>{{\App\Models\Contact::whereStatus('Read')->count()}}</h3>

                                <p>Read Messages</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-envelope-open-text"></i>
                            </div>
                            <a href="{{url('admin/messages')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-navy">
                            <div class="inner">
                                <h3>{{\App\Models\Contact::whereStatus('Unread')->count()}}</h3>

                                <p>Unread Messages</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-envelope"></i>
                            </div>
                            <a href="{{url('admin/messages')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->


            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
@endsection
