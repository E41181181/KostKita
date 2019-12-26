<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_penyewa where id_penyewa='$username' and pwd_penyewa='$password' ");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['level'] = "3";
	echo $session['username'];
	header("location:../index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>