<?php
?><!DOCTYPE html>
<html>
  <title>Login - Admin</title>
  <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font.css')?>">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.sea.css')?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('gambar/logo.png')?>">
</head>
<body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Dashboard</h1>
                  </div>
                  <p>GreenMart.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form action="<?php echo base_url('Admin/login/aksi_login'); ?>" method="post" class="form-validate mb-4">
                    <div class="form-group">
                      <input id="login-username" type="text" required data-msg="Tolong masukan username" class="input-material" name="username">
                      <label for="login-username" class="label-material" name="username">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" required data-msg="Tolong masukan password" class="input-material" name="password">
                      <label for="login-password" class="label-material" name="password">Password</label>
                    </div>
                      <div class="icheck-primary">
                              <input type="checkbox" id="remember">
                              <label for="remember" class="text-white">
                                Remember Me
                              </label>
                            </div>
                            <br>
                    <button type="submit" class="btn btn-primary" value="login">Login</button>
                  </form><br>
                  <small>Belum Memiliki Akun? </small>
                  <a href="<?php echo base_url('Admin/register')?>">Daftar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/popper.js/umd/popper.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery.cookie/jquery.cookie.js')?>"> </script>
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery-validation/jquery.validate.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/front.js')?>"></script>
  </body>
</html>