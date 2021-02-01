<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
        <img src="{{asset('dist/img/rename.png')}}" alt="{{setting()->site_name}}" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{setting()->site_name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.index')}}" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.admins')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Admins
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.accounts')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Accounts
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.players')}}" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            Players Info

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.nobility')}}" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Nobility

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.guilds')}}" class="nav-link">
                        <i class="nav-icon fas fa-synagogue"></i>
                        <p>
                            Guilds

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.npcs')}}" class="nav-link">
                        <i class="nav-icon fab fa-d-and-d"></i>
                        <p>
                            NPCs

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('admin/settings')}}" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Settings

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('admin/messages')}}" class="nav-link">
                        <i class="nav-icon fas fa-mail-bulk"></i>
                        <p>
                            Messages

                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
