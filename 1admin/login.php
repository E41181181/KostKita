<?php
//session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
//if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  //header("location: #"); // Kita Redirect ke halaman welcome.php
//}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login User</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

 <link rel="stylesheet"  href="stylebg.css/bglogin.css">
</head>

<body class="hold-transition login-page">
<?php 
$belomlogin = "Harap Login Terlebih Dahulu";
$passwordsalah = "Login gagal! Username atau Password Salah";
$logout="Logout Berhasil";

  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "<script type='text/javascript'>alert('$passwordsalah');</script>";
    }else if($_GET['pesan'] == "logout"){
      echo "<script type='text/javascript'>alert('$logout');</script>";
    }else if($_GET['pesan'] == "belum_login"){
      echo "<script type='text/javascript'>alert('$belomlogin');</script>";
    }
  }
  ?>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Ya Ngekos</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login Admin</p>

      <form action="proses_login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
             <span class="fas fa-eye-slash"></span>
            </div>
          </div>
        </div>
        <p class="mb-1">
        <a href="lupa.html">Lupa Password ?</a>
       

      <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Simpan Sandi
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- atau -</p>
        <a href="eror.html" class="btn btn-block btn-primary" >
          <i class="fab fa-facebook mr-2"></i> Login degan Facebook
        </a>
        
      </div>
      <!-- /.social-auth-links -->

      
      </p>
      <p class="mb-0">
        <center><a href="../register02.php" class="text-center">Belum Punya Akun ? <u>Daftar disini</u></a></center>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
<?php
//session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
//if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  //header("location: #"); // Kita Redirect ke halaman welcome.php
//}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login User</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

 <link rel="stylesheet"  href="stylebg.css/bglogin.css">
</head>

<body class="hold-transition login-page">
<?php 
$belomlogin = "Harap Login Terlebih Dahulu";
$passwordsalah = "Login gagal! Username atau Password Salah";
$logout="Logout Berhasil";

  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "<script type='text/javascript'>alert('$passwordsalah');</script>";
    }else if($_GET['pesan'] == "logout"){
      echo "<script type='text/javascript'>alert('$logout');</script>";
    }else if($_GET['pesan'] == "belum_login"){
      echo "<script type='text/javascript'>alert('$belomlogin');</script>";
    }
  }
  ?>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Ya Ngekos</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login Penyewa</p>

      <form action="proses_login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
             <span class="fas fa-eye-slash"></span>
            </div>
          </div>
        </div>
        <p class="mb-1">
        <a href="lupa.html">Lupa Password ?</a>
       

      <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Simpan Sandi
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- atau -</p>
        <a href="eror.html" class="btn btn-block btn-primary" >
          <i class="fab fa-facebook mr-2"></i> Login degan Facebook
        </a>
        
      </div>
      <!-- /.social-auth-links -->

      
      </p>
      <p class="mb-0">
        <center><a href="../register02.php" class="text-center">Belum Punya Akun ? <u>Daftar disini</u></a></center>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
