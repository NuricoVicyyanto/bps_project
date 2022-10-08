<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rumah_TU</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-light">
        <section class="vh-100" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
          
                      <h3 class="mb-5">Sign in</h3>
          
                      <div class="form-outline mb-4">
                        <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                        <label class="form-label" for="typeEmailX-2">Email</label>
                      </div>
          
                      <div class="form-outline mb-4">
                        <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                        <label class="form-label" for="typePasswordX-2">Password</label>
                      </div>
          
                      <!-- Checkbox -->
                      <div class="form-check d-flex justify-content-start mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                        <label class="form-check-label" for="form1Example3"> Remember password </label>
                      </div>
          
                      <a href="{{url('homepage')}}">test</a>
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('assets/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('assets/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>