<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/25db4f44a1.js" crossorigin="anonymous"></script>
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="components/css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="components/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Healing </b>Yuk</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Masuk Dulu Buat Masuk Sistem</p>
        <form action="f_login.php" method="post">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="components/js/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="components/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="components/js/adminlte.min.js"></script>
</body>

</html>