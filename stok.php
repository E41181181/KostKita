<?php
$koneksi= new mysqli ("localhost","root","","kos");
//update stok

$koneksi->query("UPDATE tb_tipekamar SET STOK_KAMAR= STOK_KAMAR-1 WHERE ID_KOS='$_GET[id]'")
?>

// utk mengurangi stok berdasarkan jumlah pesanan dari penyewa misal penyewa ingin pesan kamar sebanyak 3
//menambahkan field "jumlah" pada tabel sewa tabel terlebih dahulu 
$koneksi->query("UPDATE tb_tipekamar SET STOK_KAMAR= STOK_KAMAR-tbsewa.JUMLAH WHERE ID_KOS='$_GET[id]'")
