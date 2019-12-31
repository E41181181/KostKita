<?php 
session_start();
// koneksi database
include 'config.php';
 

// menangkap data yang di kirim dari form
$idkamar = $_POST['idtipekamar'];
//$idkos = $_POST['idkos'];
//$_SESSION['idkost'] = $idkos;
$ukurankmr = $_POST['Edukurankamar'];
$faskam = $_POST['Edfaskam'];
$kamartersedia = $_POST['Edjmlkamar'];
$ket_lainnya = $_POST['Edket_lainnya'];
$bayarsetiap = $_POST['Edbayarsetiap'];
$dihuni = $_POST['Eddihuni'];
$hargakamar = $_POST['Edhargakamar'];
$stkamar = $_POST['stkamar'];
$st_post ="0";


if (isset($_POST['save'])){
    $fileName = $_FILES['Edfotokamar']['name'];

    mysqli_query($koneksi, "UPDATE tb_tipekamar SET 
    UKURAN_KAMAR = '$ukurankmr', 
    FASILITAS_KAMAR = '$faskam', 
    STOK_KAMAR = '$kamartersedia', 
    KETERANGAN = '$ket_lainnya',
    STATUS_KAMAR = '$stkamar', 
    DIBAYAR_SETIAP = '$bayarsetiap', 
    HARGA = '$hargakamar',
    FOTO_KAMAR = '$fileName',
    ST_POST = '$st_post' 
    WHERE tb_tipekamar.ID_KAMAR = $idkamar");


    move_uploaded_file($_FILES['Edfotokamar']['tmp_name'], "../aset_fot/fototipekamar/".$_FILES['Edfotokamar']['name']);
     echo"<script>alert('Gambar Berhasil diupload !');</script>";
     //header("location:infokos.php");
    } 

//pembayaran


 //echo $_SESSION['idkost'];
 //echo $_SESSION['username'];
// menginput data ke database
//mysqli_query($koneksi,"insert into tabel_pemilik values('$idpemilik','$password','$nama','$alamatjalan','$alamatkec','$alamatkab','$notelp','$email','$fotoktp')");

//INSERT INTO `datakos` (`kodedtkls`, `namakos`, `jalan`, `kec`, `kab`, `jeniskos`, `jumlahkamar`) VALUES (NULL, 'putra', 'mastrip', 'tegal gede', 'jember', 'putra', '12');
// mengalihkan halaman kembali ke index.php
//header("location:general_2_1.php");
//mysqli_query($koneksi, "INSERT INTO tb_tipekamar VALUES ('', '$idkos', '$ukurankmr', '$faskam', '$kamartersedia', '$ket_lainnya', '$bayarsetiap', '$dihuni', '$hargakamar', '')");
 
?>