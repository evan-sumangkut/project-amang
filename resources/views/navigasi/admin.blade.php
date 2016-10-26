 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Driver<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="">Ojek<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                        <a href="{{ route('driver_ojek_active')}}">Active</a>
                                        </li>
                                        <li>
                                        <a href="{{ route('driver_ojek_pending')}}">Pending</a>
                                        </li>
                                       {{-- <li>
                                        <a href="{{ route('driver_ojek_blokir')}}">Blokir</a>
                                        </li>--}}
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Taxi<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                        <a href="{{ route('driver_taxi_active')}}">Active</a>
                                        </li>
                                        <li>
                                        <a href="{{ route('driver_taxi_pending')}}">Pending</a>
                                        </li>
                                       {{-- <li>
                                        <a href="{{ route('driver_taxi_blokir')}}">Blokir</a>
                                        </li>--}}
                                    </ul>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Merchant<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('merchant_aktif')}}">Aktif</a>
                                </li>
                                <li>
                                    <a href="{{ route('merchant_non_aktif')}}">Non-Aktif</a>
                                </li>
                                <li>
                                    <a href="{{ route('merchant_pending')}}">Pending</a>
                                </li>
                            </ul>
                        </li>
                       {{--  <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Vendor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Lihat</a>
                                </li>
                                <li>
                                    <a href="morris.html">Kelola</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Jadwal<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Lihat</a>
                                </li>
                                <li>
                                    <a href="morris.html">Kelola</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Pesan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="">Kirim Pesan</a>
                                </li>
                                <li>
                                    <a href="">Kelola</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Photo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Upload Photo</a>
                                </li>
                                <li>
                                    <a href="login.html">Kelola</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> --}}
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>