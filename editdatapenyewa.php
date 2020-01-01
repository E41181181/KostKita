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

mysqli_query($koneksi,"UPDATE tb_penyewa SET 
PWD_PENYEWA = '$edpwd', 
NAMA_PENYEWA = '$ednama', 
JALAN_PENYEWA = '$edjalan', 
KEC_PENYEWA = '$edkec', 
KAB_PENYEWA = '$edkab', 
KET_ALAMAT_PENYEWA = '$edalamat', 
NO_HP_PENYEWA = '$ednohp', 
EMAIL_PENYEWA = '$edemail' 
WHERE tb_penyewa.ID_PENYEWA = '$username'");
header("location:profile.php");
?>