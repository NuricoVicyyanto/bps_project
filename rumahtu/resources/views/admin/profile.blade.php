@extends('admin.dashboard')
@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <div class="row">
        <div class="col-sm-2">
            <ul class="navbar-nav sidebar accordion" id="accordionSidebar">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/profile') }}">
                        <i class="fas fa-fw fa-user-alt"></i>
                        <span>PROFILE</span></a>
                </li>
                <hr class="sidebar-divider">
            </ul>
        </div>
        <div class="col-sm">

        </div>
      </div>
</div>
<!-- /.container-fluid -->

@endsection
