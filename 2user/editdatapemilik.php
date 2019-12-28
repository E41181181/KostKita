<?php 
include_once 'config.php';
session_start();
$ednama = $_POST['Ednama'];
$edemail = $_POST['Edemail'];
$ednohp = $_POST['Ednohp'];
$edjalan = $_POST['Edjal'];
$edkec = $_POST['Edkec'];
$edkab = $_POST['Edkab'];
$edalamat = $_POST['Edalamat'];
$edpwd = $_POST['Edpass'];
$username = $_SESSION['username'];

mysqli_query($koneksi,"UPDATE tb_pemilik SET 
PWD_PEMILIK = '$edpwd', 
NAMA_PEMILIK = '$ednama', 
JALAN_PEMILIK = '$edjalan', 
KEC_PEMILIK = '$edkec', 
KAB_PEMILIK = '$edkab', 
KET_ALAMAT_PEMILIK = '$edalamat', 
NO_HP_PEMILIK = '$ednohp', 
EMAIL_PEMILIK = '$edemail' 
WHERE tb_pemilik.ID_PEMILIK = '$username'");
header("location:profile.php");
?>