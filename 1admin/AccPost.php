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
            <h1>Konfirmasi Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Konfirmasi Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
     

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Konfirmasi Postingan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Pemilik </th>                                     
                  <th>Nama Kos</th>
                  <th>Alamat Kos</th>                  
                  <th>Harga Kamar</th>
                  <th>Jenis Kos</th>
                  <th>Detail</th>
                  <th>Konfirmasi</th>
                  
                </tr>
                </thead>
<?php
include 'config.php';

//$query = mysqli_query($koneksi,"SELECT * FROM tb_datakos");
$sql = "SELECT * FROM tb_datakos INNER JOIN tb_tipekamar ON tb_datakos.ID_KOS = tb_tipekamar.ID_KOS 
INNER JOIN tb_pemilik ON tb_datakos.ID_PEMILIK = tb_pemilik.ID_PEMILIK WHERE tb_tipekamar.ST_POST= '0'";
		
$query = mysqli_query($koneksi, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($koneksi));
}
while ($row = mysqli_fetch_array($query))
{


echo'
                <tbody>
                <tr>
                  <td>'.$row['NAMA_PEMILIK'].'</td>
                  <td>'.$row['NAMA_KOS'].'</td>   
                  <td>'.$row['KET_ALAMAT_KOS'].'</td>                  
                  <td>Rp. '.$row['HARGA'].'</td>
                  <td>'.$row['JENIS_KOS'].'</td>                  
                  <td><a href="blank.php?id='.$row['ID_KOS'].'">Lihat</a></td>
                  <td><a href="SetAccPost.php?id='.$row['ID_KAMAR'].'">Konfirm</a></td>
                  

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
