<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            @section('dashboard')
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
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
            @section('jakarta')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Jakarta</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/jakpus-admin">Jakarta Pusat</a>
                        <a class="collapse-item" href="/jaktim-admin">Jakarta Timur</a>
                        <a class="collapse-item" href="/jakut-admin">Jakarta Utara</a>
                        <a class="collapse-item" href="jaksel-admin">Jakarta Selatan</a>
                    </div>
                </div>
            </li>
            @show
            @section('depok')
            <li class="nav-item">
                <a class="nav-link" href="depok-admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Depok</span>
                </a>
            </li>
            @show
            @section('serang')
            <li class="nav-item">
                <a class="nav-link" href="serang-admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Serang</span>
                </a>
            </li>
            @show
            @section('ponorogo')
            <li class="nav-item">
                <a class="nav-link" href="ponorogo-admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>ponorogo</span>
                </a>
            </li>
            @show
            @section('sidoarjo')
            <li class="nav-item">
                <a class="nav-link" href="sidoarjo-admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>sidoarjo</span>
                </a>
            </li>
            @show
            @section('surabaya')
            <li class="nav-item">
                <a class="nav-link" href="surabaya-admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>surabaya</span>
                </a>
            </li>
            @show
            @section('pesawaran')
            <li class="nav-item">
                <a class="nav-link" href="pesawaran-admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>pesawaran</span>
                </a>
            </li>
            @show
            @section('cirebon')
            <li class="nav-item">
                <a class="nav-link" href="cirebon-admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>cirebon</span>
                </a>
            </li>
            @show
            @section('sukabumi')
            <li class="nav-item">
                <a class="nav-link" href="sukabumi-admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>sukabumi</span>
                </a>
            </li>
            @show
            @section('karawang')
            <li class="nav-item">
                <a class="nav-link" href="karawang-admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>karawang</span>
                </a>
            </li>
            @show
            @section('bandung')
            <li class="nav-item">
                <a class="nav-link" href="bandung-admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>bandung</span>
                </a>
            </li>
            @show

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>