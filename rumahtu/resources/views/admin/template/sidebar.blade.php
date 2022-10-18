<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand align-items-center justify-content-center" href="{{ url('homepage') }}">
        <div class="sidebar-brand-icon ">
            {{-- <i class="fas fa-laugh-wink"></i> --}} 
            <img class="w-75 h-75" src="{{asset('assets/img/logowhite.ico')}}" alt="">
        </div>
        {{-- <div class="sidebar-brand-text mx-3">Rumah_TU</div> --}}
    </a>
<br>
<br>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('homepage') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    {{-- <!-- Nav Item - Pages Collapse Menu -->
    @if(Auth::user()->level == "admin")
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>
    @endif --}}

    <!-- Nav Item - QR-code -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('qrcode') }}">
            <i class="fas fa-fw fa-qrcode"></i>
            <span>QR Code</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('table') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Nav Item - voting -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-chart-pie"></i>
            <span>Voting</span></a>
    </li>

    <!-- Nav Item - register -->
    @if(Auth::user()->level == "admin")
    <li class="nav-item">
        <a class="nav-link" href="{{ url('registrasi') }}">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Register</span></a>
    </li>
    @endif

    @if(Auth::user()->level == "admin")
    <li class="nav-item">
        <a class="nav-link" href="{{ url('daftaruser') }}">
            <i class="fas fa-fw fa-solid fa-users"></i>
            <span>Daftar User</span></a>
    </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
