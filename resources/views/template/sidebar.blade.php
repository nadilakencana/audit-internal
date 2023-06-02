<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                {{-- <img src="{{ asset('fotokategori/'.Auth::user()->image) }}" width="48" height="48" alt="User" /> --}}
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                {{-- <div class="email">{{ Auth::user()->email }}</div> --}}
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/logout" class="out"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="">
                    @section('home')                       
                    <a href="/">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                    @show
                </li>
                <li>
                    @section('dtuser')                       
                        <a href="#" class="menu-toggle">
                            <i class="fa fa-user-plus icon"></i>
                            <span>Data User </span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/datauser">
                                    <span>Data User</span>
                                </a>
                            </li>
                            
                        </ul>
                    @show
                </li>
                
                <li class="">
                    @section('barang')                       
                        <a href="#" class="menu-toggle">
                            <i class="fa fa-cubes icon"></i>
                            <span>Barang</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="">
                                <a href="/barang">
                                    <span>Data barang</span>
                                </a>
                            </li>
                        </ul>
                    @show
                </li>    
                <li class="">
                    @section('anggota')                     
                        <a href="#" class="menu-toggle">
                            <i class="fa fa-users icon"></i>
                            <span>Anggota</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/dataanggota">
                                    <span>Data Anggota</span>
                                </a> 
                            </li>
                            <li>
                                <a href="/angkatan">
                                    <span>Angkatan</span>
                                </a> 
                            </li>
                        </ul>
                    @show
                </li>    
                <li class="">
                    @section('kategori')                        
                        <a href="#" class="menu-toggle">
                            <i class="fa fa-arrows-alt icon"></i>
                            <span>Category</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/kategori">
                                    <span>Data Category</span>
                                </a> 
                            </li>
                        </ul>
                    @show
                </li>    
                <li class="">
                    @section('acara')                        
                        <a href="#" class="menu-toggle">
                            <i class="fa-solid fa-book icon"></i>
                            <span>Acara</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/acara">
                                    <span>Data Acara</span>
                                </a> 
                            </li>
                        </ul>
                    @show
                </li>   
                <li class="">
                    @section('artikel')                       
                        <a href="#" class="menu-toggle">
                            <i class="fa-solid fa-newspaper icon"></i>
                            <span>Artikel</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="">
                                <a href="/artikel">
                                    <span>Data Artikel</span>
                                </a> 
                            </li>
                        </ul>
                    @show
                </li> 
                <li class="">
                    @section('jadwal')                        
                        <a href="#" class="menu-toggle">
                            <i class="fa-solid fa-computer icon"></i>
                            <span>Sharing</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="">
                                <a href="/jadwal">
                                    <span>Jadwal Sharing</span>
                                </a> 
                            </li>
                        </ul>
                    @show
                </li>   

                <li class="header">Exit</li>                  
                <li>
                    <a href="/logout">
                        <i class="material-icons icon">input</i>  
                        <span class="logout" style="color: rgb(62, 2, 2)">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">HIMTI UMT - WEB Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->

    
</section>