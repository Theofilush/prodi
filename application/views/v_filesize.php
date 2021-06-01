<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url() ?>asett/images/favicon.png" type="image/ico" />
    <title>Universitas Pembangunan Jaya </title>

    <link href="<?php echo base_url() ?>asett/dist/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asett/dist/font-awesome/css/font-awesome.min.css" rel="stylesheet">    
    <link href="<?php echo base_url() ?>asett/dist/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <h1 class="error-number">Error Max Size File</h1>
              <h2>Maaf ukuran file terlalu besar</h2>
              <p>File melebihi dari 10MB <!--<a href="#">Report this?</a>-->
              </p>
              <p>Silahkan kembali kehalaman sebelumnya</p>    <br>
                <button type="button" onclick="window.history.back()" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali ke Halaman Sebelumnya</button>
                <a type="button" href="<?php echo site_url() ?>dashboard" class="btn btn-info btn-sm"><i class="fa fa-home"></i> Kembali ke Dashboard</a>
                <!--<button type="button" onClick="history.go(-1);"><span ></span> Kembali</button>
                <button type="button" onClick="window.history.back();"><span ></span> Kembali</button>-->                
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>


    <script src="<?php echo base_url() ?>asett/dist/jquery/jquery.min.js"></script>
  	<script src="<?php echo base_url() ?>asett/dist/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>asett/dist/js/custom.js"></script>
  </body>
</html>
