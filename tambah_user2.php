<?php 
// koneksi database
include 'config.php';
 

// menangkap data yang di kirim dari form
$idpenyewa = $_POST['idpenyewa'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama'];
//$idkos = $_POST['idkos'];
$jeskel= $_POST['jeskel'];
$status = $_POST['status'];
$alamat_jalan = $_POST['alamatjalan'];
$alamat_kecamatan = $_POST['alamatkec'];
$alamat_kabupaten = $_POST['alamatkab'];
$alamat_ket = $_POST['alamatlengkap'];
$no_telp = $_POST['notelp'];
$email = $_POST['email'];
$ktp = $_POST['ktp'];
 


mysqli_query($koneksi,"INSERT INTO tb_penyewa VALUES ('$idpenyewa', '$password', '29', '$nama_lengkap', '$jeskel', '$status', '$no_telp', '$alamat_jalan', '$alamat_kecamatan', '$alamat_kabupaten', '$alamat_ket', '$email', '$ktp')");
// menginput data ke database
//mysqli_query($koneksi,"insert into tabel_pemilik values('$idpemilik','$password','$nama','$alamatjalan','$alamatkec','$alamatkab','$notelp','$email','$fotoktp')");
//mysqli_query($koneksi, "INSERT INTO tb_penyewa VALUES ('$idpemilik', '$password', '$nama_lengkap', '$alamat_jalan', '$alamat_kecamatan', '$alamat_kabupaten', '$no_telp','$email','$ktp')");
// mengalihkan halaman kembali ke index.php
header("location:index.html");
 
?>