<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ACELLU | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Util/Css/Css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Util/Css/adminlte.min.css">
  <link rel="stylesheet" href="../Util/Css/toastr.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="../Util/Img/logo1.png" class="profile-user-img img-fluid img-circle">
      <a href="../index.php"><b>ACE</b>LLU</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Iniciar Sesión</p>

        <form id="form-login">
          <div class="input-group mb-3">
            <input id="email" class="form-control" placeholder="Email" require>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="pass" type="password" class="form-control" placeholder="Password" require>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="social-auth-links text-center mb-3">
            <button type="submit" class="btn btn-block btn-primary">
              Iniciar Sesión
            </button>
          </div>
        </form>


        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="">¿Olvidaste tu contraseña?</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Crea tu cuenta</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../Util/Js/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../Util/Js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../Util/Js/adminlte.min.js"></script>
  <script src="../Util/Js/toastr.min.js" ></script>
  <script src="Login.js"></script>
</body>

</html>