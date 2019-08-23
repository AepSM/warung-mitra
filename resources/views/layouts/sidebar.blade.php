<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('adminlte/dist/img/profile/profile.png') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MENU NAVIGASI</li>
                <li class="{{ set_active(['home', 'home/*']) }}">
                    <a href="{{ url('/home') }}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ set_active(['kategori', 'kategori/*']) }}">
                    <a href="{{ url('/kategori') }}">
                        <i class="fa fa-book"></i> <span>Kategori</span>
                    </a>
                </li>
                <li class="{{ set_active(['kontak', 'kontak/*']) }}">
                    <a href="{{ url('/kontak') }}">
                        <i class="fa fa-book"></i> <span>Kontak</span>
                    </a>
                </li>
                <li class="{{ set_active(['produk', 'produk/*']) }}">
                    <a href="{{ url('/produk') }}">
                        <i class="fa fa-book"></i> <span>Produk</span>
                    </a>
                </li>
                <li class="{{ set_active(['slider', 'slider/*']) }}">
                    <a href="{{ url('/slider') }}">
                        <i class="fa fa-book"></i> <span>Slider</span>
                    </a>
                </li>
                <li class="{{ set_active(['kontak', 'kontak/*']) }}">
                    <a href="{{ url('/kontak') }}">
                        <i class="fa fa-book"></i> <span>Transaksi</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>