<?php 
 
$koneksi= new mysqli ("localhost","root","","kos");

 
$nama_tempat = $_POST['nama']; // mengambil data dari form  
 
$keterangan_tempat= $_POST['keterangan'];// mengambil data dari form  
 
$latlng = $_POST['latlng'];// mengambil data dari form  
 
mysqli_query($koneksi,"INSERT INTO tempat values('', '$nama_tempat','$keterangan_tempat','$latlng')");

echo $nama_tempat;
echo $keterangan_tempat;
echo $latlng;







?>