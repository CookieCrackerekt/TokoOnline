<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/images/favicon.png') }}" />
  <link href="{{ asset('backend/dist/css/style.min.css') }}" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div class="main-wrapper">
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>

    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
      <div class="auth-box bg-dark border-top border-secondary">
        <div id="loginform">
          <div class="text-center pt-3 pb-3">
            <span class="db"><img src="{{ asset('backend/assets/images/logo.png') }}" alt="logo" /></span>
          </div>

          @if(session()->has('error'))
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('error')}} </strong>
          </div>
          @endif

          <form class="form-horizontal m-t-20" id="loginform" action="{{ route('backend.login.process') }}" method="post">
            @csrf
            <div class="row p-b-30">
              <div class="col-12">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="mdi mdi-account fs-4"></i></span>
                  </div>
                  <input type="text" name="email" value="{{old('email')}}" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Masukkan Email" aria-label="Username" aria-describedby="basic-addon1">
                  @error('email')
                  <span class="invalid-feedback alert-danger" role="alert"> {{$message}} </span>
                  @enderror
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="mdi mdi-lock fs-4"></i></span>
                  </div>
                  <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Masukkan Password" aria-label="Password" aria-describedby="basic-addon1">
                  @error('password')
                  <span class="invalid-feedback alert-danger" role="alert"> {{$message}} </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row border-top border-secondary">
              <div class="col-12">
                <div class="form-group">
                  <div class="p-t-20">
                    <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button>
                    <button class="btn btn-success float-end" type="submit">Login</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div id="recoverform">
          <div class="row mt-3">
            <form action="{{ route('backend.login') }}" method="post">
              <!-- email -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-danger text-white h-100" id="basic-addon1"><i class="mdi mdi-email fs-4"></i></span>
                </div>
                <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" />
              </div>

              <!-- Instruction text moved here -->
              <div class="text-center mb-3">
                <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
              </div>

              <!-- pwd -->
              <div class="row mt-3 pt-3 border-top border-secondary">
                <div class="col-12">
                  <a class="btn btn-success text-white" href="#" id="to-login" name="action">Back To Login</a>
                  <button class="btn btn-info float-end" type="button" name="action">Recover</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="{{ asset('backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/assets/libs/popper.js/umd/popper.min.js') }}"></script>
  <script src="{{ asset('backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script>
    $(".preloader").fadeOut();
    $("#to-recover").on("click", function () {
      $("#loginform").slideUp();
      $("#recoverform").fadeIn();
    });
    $("#to-login").click(function () {
      $("#recoverform").hide();
      $("#loginform").fadeIn();
    });
  </script>
</body>

</html>
