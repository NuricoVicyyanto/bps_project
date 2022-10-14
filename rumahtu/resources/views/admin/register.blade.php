@extends('admin.dashboard')
@section('content')


<div class="hold-transition register-page">
  <div class="register-box">

    <div class="card">
      <div class="card-body register-card-body m-4">
        <p class="login-box-msg">Register a new account</p>

        <form action="{{ route('simpanregistrasi')}}" method="post">
          {{ csrf_field() }}
          <div class="input-group mb-3">
            <input type="text" class="form-control" required name="name" placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" required name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
          <select class="form-select" required aria-label="Default select example" name="level">
            <option selected>Role Option</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
        </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" required name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Register</button>
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
  </div><!-- /.card -->
  <!-- /.register-box -->

</div>
@endsection
