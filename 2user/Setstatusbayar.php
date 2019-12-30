<?php
include 'config.php';
		
$ambil=$koneksi->query("SELECT * FROM tb_sewa WHERE ID_SEWA ='$_GET[id]'");
$detail_sewa= $ambil->fetch_assoc();

echo $detail_sewa['ID_PEMILIK'];
echo $detail_sewa['ID_PENYEWA'];
echo $detail_sewa['STATUS_BAYAR'];


mysqli_query($koneksi,"UPDATE tb_sewa SET STATUS_BAYAR = 'Terbayar' WHERE tb_sewa.ID_SEWA ='$_GET[id]'");
header("location:sewaPemilik.php");
?>


