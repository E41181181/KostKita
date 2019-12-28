<?php 
include_once ('sidebar.php');
include_once ('rightbar.php');
include_once ('header.php');
include_once ('config.php');
//session_start();

?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  

  
    
      <!-- Sidebar Menu -->
      
      <!-- /.sidebar-menu -->
    
    <!-- /.sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contacts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contacts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <?php $datakos = mysqli_query($koneksi,"SELECT * FROM tb_datakos where id_pemilik = '".$_SESSION['username']."' ");
		                  while($dk = mysqli_fetch_array($datakos)){
			                ?>
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-6">
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-6 col-md-20 d-flex align-items-stretch">
              <div class="card bg-light"> 

                <div class="card-body pt-6">
                  <div class="row">
                    <div class="col-10">
                      <h2 class="lead"><b><?php echo $dk['NAMA_KOS']; ?></b></h2>
                      <p class="text-muted text-sm"><b><?php echo $dk['FASILITAS_KOS']; ?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <?php echo $dk['KET_ALAMAT_KOS']; ?></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span><?php echo $dk['JENIS_KOS']; ?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                
                <div class="card-footer">
                  <div class="text-right">
                    <a href="editDatakos.php?id=<?php echo $dk['ID_KOS']; ?>" class="btn btn-sm btn-primary">
                      <i class="fas fa-edit"></i> Edit Kos
                    </a>
                    <a href="EditTipekamar.php?id=<?php echo $dk['ID_KOS']; ?>" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Detail Kos
                    </a>
                    
                  </div>
                </div>
                
              </div>
            </div>                

            
            
            
                </div>
                
              </div>
              
            </div><?php } ?>
            
          </div>
         
        </div>
        
      </div>
      
      <!-- /.card -->
                      
    </section>
    
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
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
