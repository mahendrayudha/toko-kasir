<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}">
                    <i class="fa fa-dashboard"></i> <span>Contact Us</span>
                </a>
            </li>
            <li class="header">MASTER</li>
            <li>
                <a href="{{ route('banner') }}">
                    <i class="fa fa-file-text-o"></i> <span>Banner</span>
                </a>
            </li>
            <li>
                <a href="{{ route('landingpage') }}">
                    <i class="fa fa-file-text-o"></i> <span>Landing Page</span>
                </a>
            </li>
            <li>
                <a href="{{ route('term') }}">
                    <i class="fa fa-file-text-o"></i> <span>Term of Use</span>
                </a>
            </li>
            <li>
                <a href="{{ route('privacy') }}">
                    <i class="fa fa-file-text-o"></i> <span>Privacy Policy</span>
                </a>
            </li>
            <li class="header">SYSTEM</li>
            <li>
                <a href="{{ route('setting') }}">
                    <i class="fa fa-cogs"></i> <span>Pengaturan</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
