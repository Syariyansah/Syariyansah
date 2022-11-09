<!DOCTYPE html>
<html>
<head>
	<title>Daftar Baru</title>
  
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="data/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="data/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="data/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="data/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="data/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="data/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="data/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="data/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="data/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="data/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="data/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body>
<div class="container">
  <div>
<p style="font-size:24px; margin-top: 10px; text-align: center; font-family: Times New Roman;"> REGISTRASI BARU</p>
                             <hr width="50%" size="3">
                        </div >

<form action="prosesregistrasi.php" enctype="multipart/form-data" method="POST" style="margin-left: 300px;">
  <div class="form-group row">
    <label for="nomoridentitas" class="col-sm-2 col-form-label">Nomor Identitas</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="nomoridentitas" name="nomoridentitas" placeholder="Nomor NIM/NISN/NIS">
    </div>

  </div>
  <div class="form-group row">
    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="asal" class="col-sm-2 col-form-label">Asal Instansi</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="asal" name="asal" placeholder="Asal Instansi">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left: 145px;"><i class="fa fa-save"> DAFTAR</i></button>
  <a href="index.php" class="btn btn-danger" style="font-family: Times New Roman;"><i class="fa fa-rotate-left"> BATAL</i></a>
</form>
<!-- jQuery 3 -->
<script src="data/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="data/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.7 -->
<script src="data/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="data/bower_components/raphael/raphael.min.js"></script>
<script src="data/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="data/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="data/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="data/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="data/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="data/bower_components/moment/min/moment.min.js"></script>
<script src="data/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="data/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="data/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="data/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="data/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="data/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="data/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="data/dist/js/demo.js"></script>
</body>
<?php
include '/input/loadcssbawah.php';
?></html>