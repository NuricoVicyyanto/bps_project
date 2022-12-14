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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('assets/img/logoi.ico')}}">

</head>

<body class="bg-gradient-light">
        <section style="background-color: hsl(220, 100%, 54%);">
            <div class="container py-5 h-100">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-12 col-md-9">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-6 d-none d-lg-block">
                                        <img src="{{asset('assets/img/bg-login.jpg')}}"
                                        style="width: 440px; filter:brightness(0.60);">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="text-center" >
                                            <img src="{{asset('assets/img/logo.png')}}"
                                              style="width: 185px;" alt="logo" class="mt-4">
                                          </div>
                                          <h3 class="mb-4 text-center pt-4 font-weight-bold">Sign in</h3>
                                        <div class="p-5">
                                            <form action="{{ route('postlogin')}}" method="post">
                                                {{ csrf_field() }}
                                                <div class="form-outline mb-4 font-weight-bold">
                                                    <input type="email" name="email" class="form-control shadow-sm" placeholder="Email">
                                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                                </div>

                                                <div class="form-outline mb-4 font-weight-bold">
                                                    <input type="password" name="password" class="form-control shadow-sm" placeholder="Password">
                                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                                </div>

                                                <!-- Checkbox -->
                                                <div class="form-check d-flex justify-content-start mb-4">
                                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                                                </div>

                                                <button class="btn btn-primary btn-lg btn-block shadow-sm" type="submit">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
