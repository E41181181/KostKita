<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$idpemilik = $_POST['idpemilik'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama'];
$alamat_jalan = $_POST['alamatjalan'];
$alamat_kecamatan = $_POST['alamatkec'];
$alamat_kabupaten = $_POST['alamatkab'];
$alamat_ket = $_POST['alamatket'];
$no_telp = $_POST['notelp'];
$email = $_POST['email'];

 
// menginput data ke database
//mysqli_query($koneksi,"insert into tabel_pemilik values('$idpemilik','$password','$nama','$alamatjalan','$alamatkec','$alamatkab','$notelp','$email','$fotoktp')");
mysqli_query($koneksi, "INSERT INTO tb_pemilik VALUES ('$idpemilik', '$password', '$nama_lengkap', '$alamat_jalan', '$alamat_kecamatan','$alamat_kabupaten', '$alamat_ket', '$no_telp','$email','', '2')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>