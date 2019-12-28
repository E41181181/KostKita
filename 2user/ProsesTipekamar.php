<?php 
session_start();
// koneksi database
include 'config.php';
 

// menangkap data yang di kirim dari form
$idkos = $_POST['idkos'];
//$_SESSION['idkost'] = $idkos;
$ukurankmr = $_POST['ukurankamar'];
$faskam = $_POST['faskam'];
$kamartersedia = $_POST['jmlkamar'];
$ket_lainnya = $_POST['ket_lainnya'];
$bayarsetiap = $_POST['bayarsetiap'];
$dihuni = $_POST['dihuni'];
$hargakamar = $_POST['hargakamar'];
$stkamar = $_POST['stkamar'];

if (isset($_POST['save'])){
    $fileName = $_FILES['ftkmr']['name'];

mysqli_query($koneksi, "INSERT INTO tb_tipekamar VALUES 
('', '$idkos', '$ukurankmr', '$faskam', '$kamartersedia', '$ket_lainnya',
 '$stkamar', '$bayarsetiap', '$dihuni', '$hargakamar', '$fileName', '0')");
$success = "Kiriman anda akan dikirim setelah disetujui oleh Admin";
move_uploaded_file($_FILES['ftkmr']['tmp_name'], "../aset_fot/".$_FILES['ftkmr']['name']);
     echo"<script>alert('Gambar Berhasil diupload !');</script>";
     
     header("location:infokos.php");
    }
    echo "<script type='text/javascript'>alert('$success');</script>";

//pembayaran


 //echo $_SESSION['idkost'];
 //echo $_SESSION['username'];
// menginput data ke database
//mysqli_query($koneksi,"insert into tabel_pemilik values('$idpemilik','$password','$nama','$alamatjalan','$alamatkec','$alamatkab','$notelp','$email','$fotoktp')");

//INSERT INTO `datakos` (`kodedtkls`, `namakos`, `jalan`, `kec`, `kab`, `jeniskos`, `jumlahkamar`) VALUES (NULL, 'putra', 'mastrip', 'tegal gede', 'jember', 'putra', '12');
// mengalihkan halaman kembali ke index.php
//header("location:general_2_1.php");
 
?>