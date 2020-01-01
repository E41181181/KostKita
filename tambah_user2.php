<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$idpemilik = $_POST['idpenyewa'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama'];
$alamat_jalan = $_POST['alamatjalan'];
$alamat_kecamatan = $_POST['alamatkec'];
$alamat_kabupaten = $_POST['alamatkab'];
$alamat_ket = $_POST['alamatket'];
//$no_telp = $_POST['notelp'];
$email = $_POST['email'];


$nohp = $_POST['nohp'];
function hp($nohp) {
    // kadang ada penulisan no hp 0811 239 345
    $nohp = str_replace(" ","",$nohp);
    // kadang ada penulisan no hp (0274) 778787
    $nohp = str_replace("(","",$nohp);
    // kadang ada penulisan no hp (0274) 778787
    $nohp = str_replace(")","",$nohp);
    // kadang ada penulisan no hp 0811.239.345
    $nohp = str_replace(".","",$nohp);

    // cek apakah no hp mengandung karakter + dan 0-9
    if(!preg_match('/[^+0-9]/',trim($nohp))){
        // cek apakah no hp karakter 1-3 adalah +62
        if(substr(trim($nohp), 0, 3)=='+62'){
            $hp = trim($nohp);
        }
        // cek apakah no hp karakter 1 adalah 0
        elseif(substr(trim($nohp), 0, 1)=='0'){
            $hp= '+62'.substr(trim($nohp), 1);
        }
    }
   print $hp;
}
$hp1=hp($nohp);
//$hp2= hp($nohp);
//echo $hp1;
// menginput data ke database
//mysqli_query($koneksi,"insert into tabel_pemilik values('$idpemilik','$password','$nama','$alamatjalan','$alamatkec','$alamatkab','$notelp','$email','$fotoktp')");
mysqli_query($koneksi, "INSERT INTO tb_penyewa VALUES ('$idpemilik', '$password', '$nama_lengkap', '', '', '$nohp', '$alamat_jalan', '$alamat_kecamatan','$alamat_kabupaten', '$alamat_ket', '$email', '', '3')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
