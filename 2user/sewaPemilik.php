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
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
     

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Status Pembayaran Kost</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Kost </th>                                     
                  <th>Nama Penyewa</th>
                  <th>No Penyewa</th>                  
                  <th>Harga Kamar </th>
                  <th>Status </th>
                  <th colspan="2"><center>Pembayaran</center></th>
                  
                  
                </tr>
                </thead>
<?php
include 'config.php';

//$query = mysqli_query($koneksi,"SELECT * FROM tb_datakos");
$sql = "SELECT * FROM tb_sewa INNER JOIN tb_datakos on tb_sewa.ID_KOS = tb_datakos.ID_KOS 
INNER JOIN tb_pemilik ON tb_sewa.ID_PEMILIK = tb_pemilik.ID_PEMILIK 
INNER JOIN tb_penyewa ON tb_sewa.ID_PENYEWA = tb_penyewa.ID_PENYEWA
INNER JOIN tb_tipekamar on tb_sewa.ID_KAMAR = tb_tipekamar.ID_KAMAR
WHERE tb_sewa.ID_PEMILIK = '".$_SESSION['username']."' ";
		
$query = mysqli_query($koneksi, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($koneksi));
}
while ($row = mysqli_fetch_array($query))
{


echo'
                <tbody>
                <tr>
                  <td>'.$row['NAMA_KOS'].'</td>
                  <td>'.$row['NAMA_PENYEWA'].'</td>   
                  <td>'.$row['NO_HP_PENYEWA'].'</td>                  
                  <td>Rp. '.$row['HARGA'].'</td>
                  <td>'.$row['STATUS_BAYAR'].'</td>                  
                  
                  <td><select class="form-control" id="navigation" onChange="window.document.location.href=this.options[this.selectedIndex].value;">
                  <option>Pembayaran Penyewa</option>
                    <option value="Setstatusbayar.php?id='.$row['ID_SEWA'].'">Terbayar</option>
                    <option value="Setstatusbayar2.php?id='.$row['ID_SEWA'].'">Belum Membayar</option>
                    <option value="Setstatusbayar3.php?id='.$row['ID_SEWA'].'">Telah DP</option>
                    <option value="Setstatusbayar4.php?id='.$row['ID_SEWA'].'">Penyewa Membatalkan</option>                          
                  </select></td>
                  

                </tr> ';
              }

                       
                
                echo'                
                </tfoot>
              </table> ';
?>              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="#">AdminLTE.io</a>.</strong> All rights
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
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
