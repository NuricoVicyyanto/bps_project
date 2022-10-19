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
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/messages') }}">
                        <i class="fas fa-fw fa-envelope"></i>
                        <span>MESSAGES</span></a>
                </li>
                <hr class="sidebar-divider">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/notification') }}">
                        <i class="fas fa-fw fa-bell"></i>
                        <span>NOTIFCATION</span></a>
                </li>
                <hr class="sidebar-divider">
            </ul>
        </div>
        <div class="col-sm">
            

            <div class="container">
                <div class="main-body">
                
                      <!-- Breadcrumb -->
                      <nav aria-label="breadcrumb" class="main-breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                          <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                      </nav>
                      <!-- /Breadcrumb -->
                
                      <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                  <h4>{{ auth()->user()->name }}</h4>
                                  <p class="text-secondary mb-1">{{ auth()->user()->jabatan }}</p>
                                  <p class="text-muted font-size-sm">NIP. {{ auth()->user()->nip }}</p>
                                  <button class="btn btn-primary">Follow</button>
                                  <button class="btn btn-outline-primary">Message</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="card mb-3">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Username</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{ auth()->user()->name }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{ auth()->user()->email }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{ auth()->user()->no_hp }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">NIP</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{ auth()->user()->nip }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Level</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{ auth()->user()->level }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-12">
                                  <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>


        </div>
      </div>
</div>
<!-- /.container-fluid -->

@endsection
