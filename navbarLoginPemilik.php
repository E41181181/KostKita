<?php include 'config.php';
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- NAVBAR PEMILIK -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.15, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/dropdown-menu/style.css">
  <link rel="stylesheet" href="assets/mobirise-slider/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
    <link rel="stylesheet" href="assets/mobirise-slider/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/mobirise/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <script type="text/javascript">function add_chatinline(){var hccid=46980182;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>
  
  
  
</head>
<body>
  <section id="dropdown-menu-i" data-rv-view="53">

    <nav class="navbar navbar-dropdown transparent navbar-fixed-top bg-color">

        <div class="container">

            <div class="navbar-brand">
                <a href="#" class="navbar-logo"><img src="assets/images/logo.png" alt="Mobirise"></a>
                <a class="text-white" href="index.php">Kost Kita</a>
            </div>

            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="hamburger-icon"></div>
            </button>
            
            <ul class="nav-dropdown collapse pull-xs-right navbar-toggleable-sm nav navbar-nav" id="exCollapsingNavbar">
                <li class="nav-item"><a class="nav-link link" href="index.php">Home</a></li>
                <li class="nav-item dropdown open"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="true">
                <?php
            $nama = "SELECT NAMA_PEMILIK FROM tb_pemilik where ID_PEMILIK = '".$_SESSION['username']."' ";
          $query = mysqli_query($koneksi, $nama);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($koneksi));
}
while ($row = mysqli_fetch_array($query))
{  
    echo $row['NAMA_PEMILIK'];
}
?></a>                                                
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="2user/profile.php">Profil</a>
                        <a class="dropdown-item" href="2user/index.php">Kost Saya</a>
                    <div class="dropdown">
                        <a class="dropdown-item dropdown-toggle" data-toggle="dropdown-submenu" href="#">Lainnya</a>
                        <div class="dropdown-menu dropdown-submenu">
                            <a class="dropdown-item" href="2user/profile.php">Ubah Data Profil</a>
                            <a class="dropdown-item" href="2user/infokos.php">Ubah Data Kost</a>
                            <a class="dropdown-item" href="2user/TambahDataKos.php">Tambah Kost</a>
                            <a class="dropdown-item" href="2user/TambahTipeKamar.php">Tambah Tipe Kamar</a>
                            <a class="dropdown-item" href="2user/infokos.php">Atur Kost </a>
                            <a class="dropdown-item" href="2user/sewaPemilik.php">Pembayaran Sewa</a>
                            <a class="dropdown-item" href="#">--------</a>
                            <a class="dropdown-item" href="#">--------</a>
                        </div></div><a class="dropdown-item" href="2user/logout.php">Logout</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">Pusat Bantuan </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="pb1.html">==============</a>
                        <a class="dropdown-item" href="pb2.html">===========</a> 
                        <a class="dropdown-item" href="pb3.html">=======</a>  
                                        </li>                
                <li class="nav-item nav-btn">
                    <a class="nav-link btn btn-default btn-default-outline" href="2user/TambahDataKos.php">Tambah Kost Sekarang</a>
                </li></ul>

        </div>

    </nav>

</section>