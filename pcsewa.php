<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$idsewa = $_POST['idsewa'];
$idkos = $_POST['idkos'];
$idkamar = $_POST['idkamar'];
$idpemilik = $_POST['idpemilik'];
$idpenyewa = $_POST['idpenyewa'];
$status1 = "Belum Membayar";
$status2 = "Terbayar";
$date1 =date("Y-m-d H:i:s");
$date2 =date('Y-m-d H:i:s', strtotime('+1 days', strtotime($date1)));


 
// menginput data ke database
//mysqli_query($koneksi,"insert into tabel_pemilik values('$idpemilik','$password','$nama','$alamatjalan','$alamatkec','$alamatkab','$notelp','$email','$fotoktp')");
mysqli_query($koneksi, "INSERT INTO tb_sewa VALUES ('$idsewa', '$idkos', '$idkamar', '$idpemilik', '$idpenyewa', '$date1', '$status1', '$date2')");
// mengalihkan halaman kembali ke index.php
header("location:3penyewa/sewaPenyewa.php");

 
?>