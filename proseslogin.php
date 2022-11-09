<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$log = mysqli_query($koneksi, "select * from tb_user where username='$username' and password='$password' and hak_akses='siswa' and aktiv='Y'");
$ceklog=mysqli_num_rows($log);

$log1 = mysqli_query($koneksi, "select * from tb_user where username='$username' and password='$password' and hak_akses='siswa' and aktiv='T'");
$ceklog1=mysqli_num_rows($log1);

$log2 = mysqli_query($koneksi, "select * from tb_user where username='$username' and password='$password' and hak_akses='siswa' and aktiv='Baru'");
$ceklog2=mysqli_num_rows($log2);

$datasiswa = mysqli_query($koneksi, "select * from tb_datasiswa where username='$username'");
$cekdata = mysqli_num_rows($datasiswa);


if ($ceklog2 == 1 && $cekdata < 1) {
  header("location:belumterdaftar.php");
}elseif ($ceklog == 1 && $cekdata ==1) {
  session_start();
  $_SESSION['username']=$username;
  $_SESSION['status']="login";
  header("location:data/");

}elseif ($ceklog == 1) {
  session_start();
  $_SESSION['username']=$username;
  $_SESSION['status']="login";
  header("location:input/");
}elseif ($ceklog1==1) {
  header("location:nonaktiv.php");
}else{
  echo "<script>alert('Username atau Password Anda Salah');
  location.href='index.php';</script>";
}
?>
