<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">HIMTI UMT - WEB DESIGN</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->

                <li class="dropdown user user-menu" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      {{-- <img src="{{ asset('fotokategori/'.Auth::user()->image) }}" class="user-image" alt="User Image" style="height: 40px"> --}}
                      {{-- <span class="hidden-xs">{{ Auth::user()->name }}</span> --}}
                    </a>
                    <ul class="dropdown-menu" style="background-color: #F44336; color: white;">
                      <!-- User image -->
                      <li class="user-header">
                        <div class="foto">
                            {{-- <img src="{{ asset('fotokategori/'.Auth::user()->image) }}" class="img-circle" alt="User Image" style="height: 40px; margin-left: 60px"> --}}
                        </div>
                        <p class="text-center">
                          {{-- {{ Auth::user()->name }} --}}
                          <br>
                          {{-- <small>{{ Auth::user()->email }}</small> --}}
                        </p>
                      </li>
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="/logout" class="btn btn-default btn-flat keluar">Sign out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
            </ul>
        </div>
    </div>
</nav>
