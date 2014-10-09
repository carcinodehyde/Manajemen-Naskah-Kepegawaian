<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}"> DMS :: Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> -->
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group
                        </li> -->
                        <li>
                            <a href="{{ route('admin') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('JenisDokumen') }}">&nbsp;&nbsp;Jenis Dokumen</a>
                                </li>
                                <li>
                                    <a href="{{ route('Lantai') }}">&nbsp;&nbsp;Lantai</a>
                                </li>
                                <li>
                                    <a href="{{ route('Lemari') }}">&nbsp;&nbsp;Lemari</a>
                                </li>
                                <li>
                                    <a href="{{ route('Golongan') }}">&nbsp;&nbsp;Golongan PNS</a>
                                </li>
                                <li>
                                    <a href="{{ route('Pendidikan') }}">&nbsp;&nbsp;Pendidikan</a>
                                </li>
                                <li>
                                    <a href="{{ route('Jurusan') }}">&nbsp;&nbsp;Jurusan</a>
                                </li>
                                <li>
                                    <a href="{{ route('UnitKerja') }}">&nbsp;&nbsp;Unit Kerja</a>
                                </li>
                                <li>
                                    <a href="{{ route('Agama') }}">&nbsp;&nbsp;Agama</a>
                                </li>
                                <li><hr></li>
                                <li>
                                    <a href="{{ route('Pegawai') }}">&nbsp;&nbsp;Pegawai</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('proses') }}"><i class="fa fa-edit fa-fw"></i> Proses Data</a>
                            <!-- <ul class="nav nav-second-level">
                                <li>
                                    <a href="morris.html">Dokumen</a>
                                </li>
                                <li>
                                    <a href="morris.html">Lokasi</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('biodata') }}">Laporan Biodata Pegawai</a>
                                </li>
                                <!-- <li>
                                    <a href="{{ route('kelengkapan') }}">Laporan Kelengkapan Data</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>