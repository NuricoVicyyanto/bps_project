@extends('admin.dashboard')
@section('content')

<div class="hold-transition register-page">
    <div class="register-box">


          <form action="{{ route('simpantask')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="input-group mb-3">
              <input type="text" class="form-control" required name="name" placeholder="Full name" readonly value="{{ auth()->user()->name }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" required name="caption" placeholder="Task">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-tasks"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="date" class="form-control" name="date" placeholder="dd-mm-yyyy">
            </div>
            <div class="form-group">
              <input name="file" required type="file" id="gambar">
          </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-6">
                  <button type="submit" class="btn btn-primary">Add</button>
              </div>
              <!-- /.col -->
              <div class="col-6">
                  <a href="{{ url('registrasi') }}" class="btn btn-danger float-right">back</a>
              </div>
            </div>
        </div>
        </form>

      </div>
      <!-- /.form-box -->

@endsection
