<?php
session_start();
$ID_KOS= $_GET['id'];
unset ($_SESSION["wishlist"][$ID_KOS]);
echo "<script>alert('Kos Terhapus dari Daftar Wishlist Anda');</script>";
echo "<script>location='wishlist.php';</script>";
?>
