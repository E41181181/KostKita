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
              <h3 class="card-title">Data User Penyewa Kost</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username </th> 
                  <th>Nama</th>                  
                  <th>Keterangan Alamat</th>
                  <th>No Telp</th>
                  <th>Email</th>
                  <th>Edit </th>
                  <th>Hapus </th>
                </tr>
                </thead>
<?php
include 'config.php';
//$query = mysqli_query($koneksi,"SELECT * FROM tb_datakos");
$sql = 'SELECT id_penyewa, nama_penyewa, jalan_penyewa, kec_penyewa, kab_penyewa, ket_alamat_penyewa, no_hp_penyewa, email_penyewa 
		FROM tb_penyewa';
		
$query = mysqli_query($koneksi, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($koneksi));
}
while ($row = mysqli_fetch_array($query))
{


echo'
                <tbody>
                <tr>
                  <td>'.$row['id_penyewa'].'</td>
                  <td>'.$row['nama_penyewa'].'</td>                  
                  <td>'.$row['ket_alamat_penyewa'].'</td>
                  <td>'.$row['no_hp_penyewa'].'</td>
                  <td>'.$row['email_penyewa'].'</td>
                  <td><a href="#">Edit</a></td>
                  <td><a href="#">Hapus</a></td>

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
