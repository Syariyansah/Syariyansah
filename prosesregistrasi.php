<?php
include 'koneksi.php';

$ni=$_POST['nomoridentitas'];
$nama=$_POST['namalengkap'];
$asal=$_POST['asal'];

$query=("INSERT into tb_user values('$ni','$nama','$ni','siswa','$asal','baru')");
$sql = mysqli_multi_query($koneksi, $query);
      if($sql){ 
        echo "<script>alert('Proses Registrasi berhasil')</script>";
        header("location:info.php");
      }else{
        echo "<script>alert('Proses Registrasi Gagal!');
              window.history.go(-1)</script>";
      }
?>