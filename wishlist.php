<?php
session_start();
//koneksi ke database kita
$koneksi= new mysqli ("localhost","root","","kos");
//JIKA BELUM LOGIN ATAU TERDAFTAR MAKA dilarikan ke halaman Login.
if (!isset ($_SESSION["penyewa"]))
{
echo "<script>alert('Silahkan Login Terlebih Dahulu');</script>";
echo "<script>location='login_penyewa.php';</script>";

}?>
<?php
//jika wishlist kosong akan dilarikan ke index
if (empty($_SESSION["wishlist"]) OR !isset($_SESSION["wishlist"]))
	{
	echo "<script>alert('Wishlist Kosong, Silahkan Melakukan Pencarian Kos Terlebih Dahulu');</script>";
	echo "<script>location='index.php';</script>";
	}


//mendapatkan id yg akan dijadikan wishlist	
$ID_KOS= $_GET['id'];
if ($_SESSION['wishlist'][$ID_KOS]=1)

echo"<pre>";
print_r($_SESSION['wishlist']);
echo"</pre>";
// membuat tampilan interface
echo "<script>alert('Kos Telah Masuk Daftar Wishlist Anda');</script>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wishlist Saya</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css" href="">
</head>
<body>
<!-- Konten-->
<nav class="navbar navbar-default">
  <div class="container">
    
    <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="carikos.php">Cari Kos</a></li>
        <li><a href="sewa.php">Sewa</a></li>
        <li><a href="daftar.php">Daftar</a></li>
        
        <!--jika sudah loginpada session pelanggan -->
        <?php if (isset($_SESSION["penyewa"]));?>
        <li><a href="logout.php">Logout</a></li>
        <!-- selain itu belum login atau belum ada session pelanggan -->
        <? php else; ?>
        <li><a href="login_penyewa.php">Login</a></li>
        <? php endif ?>
        
        <li><a href="Pusatbantuan.php">Pusat Bantuan</a></li>
    </ul>
  </div>    
</nav>
<!-- Konten-->
<section class="konten">
	<div class="container">	
	<h1>Wishlist saya</h1>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th><center>No</th></center>
				<th><center>Nama Kos</th></center>
				<th><center>Alamat</th></center>
				<th><center>Jenis Kos</th></center>
				<th><center>Harga</th></center>
				<th><center>Fasilitas Kos</th></center>
				<th><center>Aksi</th></center>

			</tr>
		</thead>
		<tbody>
			<?php $no=1;?>
			<?php foreach ($_SESSION['wishlist'] as $ID_KOS => $jumlah) :?>
			<!--menampilkan wishlist yg sedang diperulangkan berdasarkan id produk-->
			<?php
			$ambil=$koneksi->query("SELECT * FROM tb_datakos INNER JOIN tb_tipekamar ON tb_datakos.ID_KOS = tb_tipekamar.ID_KOS  AND tb_datakos.ID_KOS= '$ID_KOS'");
				$pecah= $ambil->fetch_assoc();
				echo"<pre>";
				print_r($pecah);
				echo"</pre>";
				?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $pecah ["NAMA_KOS"];?></td>
				<td><?php echo $pecah ["KET_ALAMAT_KOS"];?></td>
				<td><?php echo $pecah ["JENIS_KOS"];?></td>
				<td>Rp.<?php echo number_format($pecah ["HARGA"]) ;?></td>
				<td><?php echo $pecah ["FASILITAS_KOS"];?></td>
				<td><a href="hapus_wishlist.php?id=<?php echo $pecah['ID_KOS'];?>" class ="btn btn-danger">Hapus Wishlist</td></a>

			</tr>
			<?php $no++; ?>
			<?php endforeach?>
		</tbody>
	</table>
</nav>
</body>
</html>