<?php
?><!DOCTYPE html>
<html>
<style>
    body {
     background-image: url("<?php echo base_url('gambar/b.jpg')?>");
     background-color: #cccccc;
    }
    input[type=text],[type=password]{
        width:100%;
        padding:6px 6px;
        margin: 10px 0;
        color: #f2f2f2;
      }
      a:link {
      color: #1f9fc2;
      text-decoration: none;
    }
    a:visited {
      color: #1f9fc2;
    }
    a:hover {
      color: #024d61;
    }
    a:active {
      color: #024d61;
    }
  </style>
  <title>Start</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap.min.js')?>"></script>
  
</head>
<body>
  <br><br><br><br><br>
  <div class="login">
    <h2><center><font size="5" color="#f2f2f2">Start <b>Now</b></font></h2></center>
    <form action="" method="post">
      <div>
        <br>
          <a href="<?php echo base_url('Admin/login')?>" class="btn btn-danger btn-block">
            <label class="text-white"> Admin</label>
          </a>
      </div><br>
          <a href="<?php echo base_url('Customer/login')?>" class="btn btn-primary btn-block">
            <label class="text-white"> Customer</label></a><br>
      </div> 
    </form>
    </div>
  </div>
</body>
</html>