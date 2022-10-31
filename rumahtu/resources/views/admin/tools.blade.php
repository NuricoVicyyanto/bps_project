@extends('admin.dashboard')
@section('content')
    {{-- <link rel="stylesheet" type="text/css" href="https://rawgit.com/mastamvan/backup/ButtonPack/style-button4.css" />

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-labeled btn-primary">
                    <span class="btn-label"><i class="fa fa-camera"></i></span>
                    Camera</button>
                <button type="button" class="btn btn-labeled btn-primary">
                    <span class="btn-label"><i class="fa fa-camera"></i></span>
                    Camera</button>
                <button type="button" class="btn btn-labeled btn-primary">
                    <span class="btn-label"><i class="fa fa-camera"></i></span>
                    Camera</button>
                <button type="button" class="btn btn-labeled btn-primary">
                    <span class="btn-label"><i class="fa fa-camera"></i></span>
                    Camera</button>
                <button type="button" class="btn btn-labeled btn-primary">
                    <span class="btn-label"><i class="fa fa-camera"></i></span>
                    Camera</button>
                <button type="button" class="btn btn-labeled btn-primary">
                    <span class="btn-label"><i class="fa fa-camera"></i></span>
                    Camera</button>
            </div>
        </div>
    </div> --}}

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>
            <a href="#" class="btn btn-sq-lg btn-primary">
                <i class="fa fa-user fa-5x"></i><br/>
                Demo Primary <br>Button
            </a>
            <a href="#" class="btn btn-sq-lg btn-success">
              <i class="fa fa-user fa-5x"></i><br/>
              Demo Success <br>Button
            </a>
            <a href="#" class="btn btn-sq-lg btn-info">
              <i class="fa fa-user fa-5x"></i><br/>
              Demo Info <br>Button
            </a>
            <a href="#" class="btn btn-sq-lg btn-warning">
              <i class="fa fa-user fa-5x"></i><br/>
              Demo Warning <br>Button
            </a>
            <a href="#" class="btn btn-sq-lg btn-danger">
              <i class="fa fa-user fa-5x"></i><br/>
              Demo Danger <br>Button
            </a>
            <a href="#" class="btn btn-sq-lg btn-danger">
              <i class="fa fa-user fa-5x"></i><br/>
              Demo Danger <br>Button
            </a>
           <a href="#" class="btn btn-sq-lg btn-danger">
              <i class="fa fa-user fa-5x"></i><br/>
              Demo Danger <br>Button
            </a>
          </p>
        </div>
	</div>
    <style>
        .btn-sq-lg {
        width: 150px !important;
        height: 150px !important;
        }

        .btn-sq {
        width: 100px !important;
        height: 100px !important;
        font-size: 10px;
        }

        .btn-sq-sm {
        width: 50px !important;
        height: 50px !important;
        font-size: 10px;
        }

        .btn-sq-xs {
        width: 25px !important;
        height: 25px !important;
        padding:2px;
        }
    </style>
</div>
@endsection
