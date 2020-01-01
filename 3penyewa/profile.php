<?php
include_once ('sidebar.php');
include_once ('rightbar.php');
include_once ('header.php');
include_once ('config.php');

?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                      alt="User profile picture">
                  </div>
                  <?php $data = mysqli_query($koneksi,"SELECT * FROM tb_penyewa where id_penyewa = '".$_SESSION['username']."' ");
		while($d = mysqli_fetch_array($data)){
			?>
                  <h3 class="profile-username text-center"><?php echo $d['NAMA_PENYEWA']; ?></h3> 
                              

                  <p class="text-muted text-center">PENYEWA Kost</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>No HP</b> <a class="float-right"><?php echo $d['NO_HP_PENYEWA']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Email</b> <a class="float-right"><?php echo $d['EMAIL_PENYEWA']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Alamat</b> <a class="float-right"><?php echo $d['KET_ALAMAT_PENYEWA']; ?></a>
                    </li>
                  </ul>
                  <?php            }?>
                  <a href="#settings" class="btn btn-primary btn-block"><b>Edit Profil</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">                  
                    
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Data User</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    
                    <!-- /.tab-pane -->
                   
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">
                    <?php 
                    $datapenyewa = mysqli_query($koneksi,"SELECT NAMA_PENYEWA, NO_HP_PENYEWA, EMAIL_PENYEWA, JALAN_PENYEWA, KEC_PENYEWA, KAB_PENYEWA, KET_ALAMAT_PENYEWA FROM tb_penyewa WHERE ID_PENYEWA='".$_SESSION['username']."' ");
                    while($c = mysqli_fetch_array($datapenyewa)){
                    ?>
                      <form class="form-horizontal" action="editdatapenyewa.php" method="POST">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Nama </label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" name="Ednama" value="<?php echo $c['NAMA_PENYEWA']; ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" name="Edemail" value="<?php echo $c['EMAIL_PENYEWA']; ?>" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">No Telp</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputName2" name="Ednohp" value="<?php echo $c['NO_HP_PENYEWA']; ?>" placeholder="No Telepon Baru">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Alamat Jalan</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" name="Edjal" value="<?php echo $c['JALAN_PENYEWA']; ?>" placeholder="Alamat(Jalan)">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Kecamatan</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" name="Edkec" value="<?php echo $c['KEC_PENYEWA']; ?>" placeholder="Alamat(Kecamatan)">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Kabupaten</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" name="Edkab" value="<?php echo $c['KAB_PENYEWA']; ?>" placeholder="Alamat(Kabupaten)">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputExperience" name="Edalamat" value="<?php echo $c['KET_ALAMAT_PENYEWA']; ?>"></input>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputSkills" name="Edpass" placeholder="Password Baru">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                              </label>
                            </div>
                          </div>
                        </div>
                        <?php 
                        }        
                        ?>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>
