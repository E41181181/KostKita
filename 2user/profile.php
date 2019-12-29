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
                  <?php $data = mysqli_query($koneksi,"SELECT nama_pemilik, no_hp_pemilik, email_pemilik, ket_alamat_pemilik FROM tb_pemilik where id_pemilik = '".$_SESSION['username']."' ");
		while($d = mysqli_fetch_array($data)){
			?>
                  <h3 class="profile-username text-center"><?php echo $d['nama_pemilik']; ?></h3> 
                              

                  <p class="text-muted text-center">Pemilik Kost</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>No HP</b> <a class="float-right"><?php echo $d['no_hp_pemilik']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Email</b> <a class="float-right"><?php echo $d['email_pemilik']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Alamat</b> <a class="float-right"><?php echo $d['ket_alamat_pemilik']; ?></a>
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
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Kost Saya</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Info</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Data User</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
                      <?php $datakos = mysqli_query($koneksi,"SELECT * FROM tb_datakos where id_pemilik = '".$_SESSION['username']."' ");
		                  while($dk = mysqli_fetch_array($datakos)){
			                ?>
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
                            alt="user image">
                          <span class="username">
                            <a href="#">
                            <?php echo $dk['NAMA_KOS']; ?>
                            </a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Shared publicly - 7:30 PM today</span>
                        </div>
                        <!-- /.user-block -->
                        <?php echo 'Jenis Kost  : ';?> <?php echo $dk['JENIS_KOS']; ?></br>
                        <?php echo 'Fasilitas Kost : ';?><?php echo $dk['FASILITAS_KOS']; ?></br>
                        </br>
                        <?php echo 'Alamat Kost';?></br>
                        <?php echo 'Jalan : ';?><?php echo $dk['JALAN_KOS']; ?></br>
                        <?php echo 'Kecamatan : ';?><?php echo $dk['KEC_KOS']; ?></br>
                        <?php echo 'Kabupaten : ';?><?php echo $dk['KAB_KOS']; ?></br>
                        <?php echo 'Alamat Lengkap :  ';?><?php echo $dk['KET_ALAMAT_KOS']; ?></br>                        
                        <?php echo 'Jumlah Kamar :  ';?><?php echo $dk['JUMLAH_KAMAR']; ?></br>

                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                      </div>
                      <!-- /.post --><?php } ?>                     
                   </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                    
                          
                    
                     </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">
                    <?php 
                    $datapemilik = mysqli_query($koneksi,"SELECT NAMA_PEMILIK, NO_HP_PEMILIK, EMAIL_PEMILIK, JALAN_PEMILIK, KEC_PEMILIK, KAB_PEMILIK, KET_ALAMAT_PEMILIK FROM tb_pemilik WHERE ID_PEMILIK='".$_SESSION['username']."' ");
                    while($c = mysqli_fetch_array($datapemilik)){
                    ?>
                      <form class="form-horizontal" action="editdatapemilik.php" method="POST">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Nama </label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" name="Ednama" value="<?php echo $c['NAMA_PEMILIK']; ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" name="Edemail" value="<?php echo $c['EMAIL_PEMILIK']; ?>" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">No Telp</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputName2" name="Ednohp" value="<?php echo $c['NO_HP_PEMILIK']; ?>" placeholder="No Telepon Baru">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Alamat Jalan</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" name="Edjal" value="<?php echo $c['JALAN_PEMILIK']; ?>" placeholder="Alamat(Jalan)">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Kecamatan</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" name="Edkec" value="<?php echo $c['KEC_PEMILIK']; ?>" placeholder="Alamat(Kecamatan)">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Kabupaten</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" name="Edkab" value="<?php echo $c['KAB_PEMILIK']; ?>" placeholder="Alamat(Kabupaten)">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputExperience" name="Edalamat" value="<?php echo $c['KET_ALAMAT_PEMILIK']; ?>"></input>
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
