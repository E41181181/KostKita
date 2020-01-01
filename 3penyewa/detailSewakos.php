<?php 
include_once ('sidebar.php');
include_once ('rightbar.php');
include_once ('header.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Sewa Kos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Detail Sewa Kost</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
        <?php
include 'config.php';
		
$ambil=$koneksi->query("SELECT * FROM tb_sewa
INNER JOIN tb_datakos ON tb_sewa.ID_KOS = tb_datakos.ID_KOS
INNER JOIN tb_tipekamar ON tb_sewa.ID_KAMAR = tb_tipekamar.ID_KAMAR 
INNER JOIN tb_pemilik ON tb_sewa.ID_PEMILIK = tb_pemilik.ID_PEMILIK
INNER JOIN tb_penyewa ON tb_sewa.ID_PENYEWA = tb_penyewa.ID_PENYEWA
WHERE tb_sewa.ID_SEWA ='$_GET[id]'");
$detail_kos= $ambil->fetch_assoc();

?>                          
                            <tr>
                            <td><b>Data Penyewa</b><td></Detail>
                            </tr><br>
                            <tr>
                                <td>Nama Penyewa</td>
                                <td> :</td>
                                <td><?php echo $detail_kos['NAMA_PENYEWA'];?></td>
                            </tr><br>
                            <tr>
                                <td>No HP</td>
                                <td> :</td>
                                <td><?php echo $detail_kos['NO_HP_PENYEWA'];?></td>
                            </tr><br>
                            <tr>
                                <td>Alamat </td>
                                <td> :</td>
                                <td><?php echo $detail_kos['JALAN_PENYEWA'];?> <?php echo $detail_kos['KEC_PENYEWA'];?> <?php echo $detail_kos['KAB_PENYEWA'];?></td>
                            </tr><br>
                            <tr>
                                <td>Alamat Lengkap </td>
                                <td> :</td>
                                <td><?php echo $detail_kos['KET_ALAMAT_PENYEWA'];?></td>
                            </tr><br>
                                                        
                            <tr>
                            <td><b>Detail Kos</b><td></Detail>
                            </tr><br>
                            <tr>
                                <td>Pemilik Kos</td>
                                <td> :</td>
                                <td><?php echo $detail_kos['ID_PEMILIK'];?></td>
                            </tr><br>
                            <tr>
                                <td>Nama Kos</td>
                                <td> :</td>
                                <td><?php echo $detail_kos['NAMA_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Jalan</td>
                                <td> :</td>
                                <td><?php echo $detail_kos['JALAN_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>kecamatan</td>
                                <td> :</td>
                                <td><?php echo $detail_kos['KEC_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Kabupaten </td>
                                <td>:</td>
                                <td><?php echo $detail_kos['KAB_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Alamat kos </td>
                                <td>:</td>
                                <td><?php echo $detail_kos['KET_ALAMAT_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Jenis kos</td>
                                <td> :</td>
                                <td><?php echo $detail_kos['JENIS_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Fasilitas kos </td>
                                <td>:</td>
                                <td><?php echo $detail_kos['FASILITAS_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Jumlah kamar</td>
                                <td> :</td>
                                <td><?php echo $detail_kos['JUMLAH_KAMAR'];?></td>
                            </tr><br>
                            <tr>
                            <td><b>Detail Kamar</b><td></Detail>
                          </tr><br>
                            <tr>
                                <td>Ukuran Kamar</td>
                                <td> : </td>
                                <td><?php echo $detail_kos['UKURAN_KAMAR'];?></td></tr><br>
                            <tr>
                                <td>Fasilitas Kamar</td> 
                                <td>:</td>
                                <td><?php echo $detail_kos['FASILITAS_KAMAR'];?></td></tr><br>
                            <tr>
                                <td>Stok Kamar</td>
                                <td>:</td>
                                <td><?php echo $detail_kos['STOK_KAMAR'];?></td></tr><br>
                            <tr>
                                <td><b>Detail Harga</b><td></tr><br>
                            <tr>
                                <td>Harga</td> 
                                <td>:</td>
                                <td>Rp.<?php echo number_format( $detail_kos['HARGA']);?></td></tr><br>
                            <tr>
                                <td>Pembayaran Setiap </td>
                                <td>:</td>
                                <td><?php echo $detail_kos['DIBAYAR_SETIAP'];?></td></tr><br>
                            <tr>
                                <td>Penghuni PerKamar</td>
                                <td> :</td>
                                <td><?php echo $detail_kos['PENGHUNI'];?></td></tr><br>
                            <tr>
                                <td>Peraturan Kos</td>
                                <td>:</td>
                                <td><?php echo $detail_kos['KETERANGAN'];?></td></tr><br>
                            <tr>
                            <td><b>Status Pembayaran</b><td></Detail>
                            </tr><br>
                            <tr>
                                <td>Status</td>
                                <td> :</td>
                                <td><b><?php echo $detail_kos['STATUS_BAYAR'];?></b></td>
                            </tr><br>

<?php/*
mysqli_query($koneksi,"UPDATE tb_sewa SET STATUS_BAYAR = 'Terbayar' WHERE tb_sewa.ID_SEWA ='$_GET[id]'");
header("location:sewaPemilik.php");
*/?>




      </div>
      <!-- /.card-body -->
      <div class="card-footer">
      <button onclick="location.href='sewaPenyewa.php'" class="btn btn-primary">Kembali</button>
      <a href="detailSewakosPrint.php?id=<?php echo $detail_kos['ID_SEWA'];?>">
      <button type="submit" class="btn btn-primary">Print</button>
      </a>
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0.0
  </div>
  <strong>Copyright &copy; 2014-2019 <a href="#">KostKita</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>

</html>
