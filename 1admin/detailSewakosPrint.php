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
                  <th>Nama Penyewa</th>
                  <th>Nama Kost </th>                                     
                  <th>Nama Pemilik</th> 
                  <th>Tanggal</th>
                  <th>Status</th>
                  
                  
                  
                </tr>
                </thead>
<?php
include 'config.php';

//$query = mysqli_query($koneksi,"SELECT * FROM tb_datakos");
$sql = "SELECT * FROM tb_sewa INNER JOIN tb_datakos on tb_sewa.ID_KOS = tb_datakos.ID_KOS 
INNER JOIN tb_pemilik ON tb_sewa.ID_PEMILIK = tb_pemilik.ID_PEMILIK 
INNER JOIN tb_penyewa ON tb_sewa.ID_PENYEWA = tb_penyewa.ID_PENYEWA
INNER JOIN tb_tipekamar on tb_sewa.ID_KAMAR = tb_tipekamar.ID_KAMAR";
		
$query = mysqli_query($koneksi, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($koneksi));
}
while ($row = mysqli_fetch_array($query))
{


echo'
                <tbody>
                <tr>
                  <td>'.$row['NAMA_PENYEWA'].'</td> 
                  <td>'.$row['NAMA_KOS'].'</td>
                  <td>'.$row['NAMA_PEMILIK'].'</td>
                  <td>'.$row['TANGGAL_BAYAR'].'</td>                              
                  <td>'.$row['STATUS_BAYAR'].'</td>
                     
                  
                 
                  

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
      <div class="card-footer">
      <script>
		window.print();
	</script>
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
    <b>Version</b> 1.0.1
  </div>
  <strong>Copyright &copy; 2014-2019 <a href="#">Kost Kita</a>.</strong> All rights
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
