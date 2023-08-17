<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Audit internal</div>
            </a>

            <!-- Divider -->
            @php
            $user = \App\Models\User::where('id', auth()->user()->id)
            ->first();
            @endphp          
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            @section('dashboard')
                <li class="nav-item">
                    <a class="nav-link" href="/home">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>
            @show

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Informations
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            @section('user')
            @if($user->level == 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="akun">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Data User</span>
                    </a>
                </li>
            @endif
            @show
            @section('lhp')
            @if($user->level == 'admin' || $user->level == 'audithor' || $user->level == 'direc')
                <li class="nav-item">
                    <a class="nav-link" href="/datalhp">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>LHPS</span>
                    </a>
                </li>
            @endif
            @show
            @section('verif')
            @if($user->level == 'admin' || $user->level == 'spi')
                <li class="nav-item">
                    <a class="nav-link" href="verif-lhps">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Verifikasi LHPS</span>
                    </a>
                </li>
            @endif
            @show
            @section('cetak')
            @if($user->level == 'admin' || $user->level == 'direc')
                <li class="nav-item">
                    <a class="nav-link" href="bandung-admin">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Cettak LHPS</span>
                    </a>
                </li>
            @endif
            @show

            <li class="nav-item">
                <a class="nav-link btn btn-danger" href="/logout">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Log Out</span>
                </a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>