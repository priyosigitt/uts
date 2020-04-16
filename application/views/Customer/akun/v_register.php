<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register-User</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url('assets/login/fonts/material-icon/css/material-design-iconic-font.min.css')?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('gambar/logo.png')?>">
    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/style.css')?>">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form action="<?php echo base_url('Customer/register');?>" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Nama" value="<?php echo set_value('nama'); ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" value="<?php echo set_value('username'); ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" value="<?php echo set_value('password'); ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_conf" id="password_conf" placeholder="Re-password" alue="<?php echo set_value('password_conf'); ?>"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Menyetujui  <a href="#" class="term-service">kebijakan</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url('gambar/signup-image.jpg')?>" alt="sing up image"></figure>
                        <a href="<?php echo base_url('Customer/login'); ?>" class="signup-image-link">Sudah memiliki Akun?</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="<?php echo base_url('assets/login/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/login/js/main.js')?>"></script>
</body>
</html>