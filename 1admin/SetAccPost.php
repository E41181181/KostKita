<?php
include 'config.php';
	



mysqli_query($koneksi,"UPDATE tb_tipekamar SET ST_POST = '1' WHERE tb_tipekamar.ID_KAMAR ='$_GET[id]'");
header("location:AccPost.php");
?>



