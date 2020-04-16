<!DOCTYPE html>
<html lang="en">
  <head>   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

  <title>GreenMart</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/shop-homepage.css')?>" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/jquery/jquery-ui.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('gambar/logo.png')?>">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark purple-gradient fixed-top">
    <div class="container">   
      <a class="navbar-brand" href="#"><img src="<?php echo base_url('gambar/logo.png') ?>" width="40"/>GreenMart</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url()?>Customer/page"><b> HOME</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>Customer/shopping/tampil_cart">
              <b> KERANJANG</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>Customer/page/cara_bayar">
              <b> CARA BAYAR</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>Customer/page/tentang">
              <b>  TENTANG</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>Customer/login/logout">
             <b> LOGOUT </b><img src="<?php echo base_url('gambar/logout.png') ?>" width="19"/></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <div class="sidenav">
        <h1 class="my-4"></h1>
        <div class="list-group" id="sidenav">
            <a class="list-group-item purple-gradient"><strong class="text-white">KATEGORI</strong></a>
            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="<?php echo base_url()?>Customer/kategori/index/" class="list-group-item">Semua<span class="badge badge-danger badge-pill"><?php echo $total_product; ?></span></a>
            <?php  
                    foreach ($kategori as $row)
                        {  
            ?>    
            <a class="list-group-item list-group-item-action" href="<?php echo base_url()?>Customer/kategori/index/<?php echo $row['id'];?>" class="list-group-item"><?php echo $row['nama_kategori'];?></a>  
            <?php } ?>    
        </div><br>  
        <div class="list-group">
           <a class="list-group-item purple-gradient"><strong class="text-white">LIST PESANAN</strong></a>
          <?php    
            $cart= $this->cart->contents();
// If cart is empty, this will show below message.
            if(empty($cart)) {
                ?>  
                <a  class="list-group-item list-group-item-action">Keranjang Belanja Kosong</a>   
                <?php  
            }   
            else    
                {   
                    $grand_total = 0;
                    foreach ($cart as $item)
                        {  
                            $grand_total+=$item['subtotal'];
                ?>   
                <a  class="list-group-item list-group-item-action">
                  <?php echo $item['qty']; ?> x <?php echo $item['name']; ?><br>
                  <font color="#bd34eb"><b>Rp. <?php echo number_format($item['subtotal'],0,",","."); ?></b></font></a>
                <?php }?>  
 
                <?php }?> 
                <a href="<?php echo base_url()?>Customer/shopping/tampil_cart" class="list-group-item purple-gradient"><i class="glyphicon glyphicon-shopping-cart"></i><font class="text-white">CHECKOUT</font></a>
            </div>
          </div>      
      </div>
      <!-- /.col-lg-3 -->
