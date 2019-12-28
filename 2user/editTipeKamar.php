<?php 
include_once ('sidebar.php');
include_once ('rightbar.php');
include_once ('header.php');
include_once ('config.php');
//session_start();

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Tipe Kamar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            
            <div class="card card-primary">
              <div class="card-header">                
                <h3 class="card-title">Tipe Kamar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="ProsesEditTipeKamar.php"  enctype="multipart/form-data">
                <div class="card-body">
                <?php  
                  $username = $_SESSION['username'];
                  $query = "SELECT id_kos, nama_kos FROM tb_datakos where ID_PEMILIK='$username'";
                  $result = mysqli_query($koneksi, $query);
                ?>
                <div class="form-group">
                        <label>Pilih Kost</label>                        
                        <select class="form-control" id="ukurankamar" name="idkos">
                        <?php while($data = mysqli_fetch_assoc($result) ){?>
                        <option value="<?php echo $data['id_kos']; ?>"><?php echo $data['nama_kos']; ?></option>
                        <?php } ?>                          
                        </select></div>
                <?php		
                $ambil=$koneksi->query("SELECT * FROM tb_tipekamar  WHERE ID_KOS='$_GET[id]'");
                $EdtipeKamar= $ambil->fetch_assoc();
                ?>                                            
                        
                    <div class="form-group">
                        <label>Ukuran Kamar</label>                        
                        <select class="form-control" id="ukurankamar" name="Edukurankamar">
                        <option>Pilih Ukuran Kamar</option>
                          <option>2 X 2</option>
                          <option>2 X 3</option>
                          <option>3 X 2</option>
                          <option>3 X 3</option>
                          <option>3 X 4</option>
                          <option>4 X 4</option>
                          <option>Lainya..</option>                          
                        </select></div>
                        <p></p>
                        <div class="form-group">
                          <label>Fasilitas Kamar</label>
                          <textarea class="form-control" rows="3" id="faskam" name="Edfaskam" placeholder="Fasilitas Kamar(Kasur, Meja, Kursi, Kamar Mandi Dalam dll) "><?php echo $EdtipeKamar['FASILITAS_KAMAR'];?></textarea>
                        </div>       
                        <P></P>    
                        <div class="form-group">
                          <label for="jumlahkamar">Kamar Tersedia</label>
                          <input type="number" min="1" max="150" class="form-control" id="jumlahkamar" name="Edjmlkamar" placeholder="Masukan Jumlah Kamar" value="<?php echo $EdtipeKamar['STOK_KAMAR'];?>">
                          
                        </div>                        
                        <div class="form-group">
                          <label>Keterangan Lainnya</label>
                          <textarea class="form-control" rows="3" id="ket_lainnya" name="Edket_lainnya" placeholder="(Peraturan atau informasi lainnya....) "><?php echo $EdtipeKamar['KETERANGAN'];?></textarea>
                        </div>
                        <div class="form-group">
                        <label>Status Kamar</label>                        
                        <select class="form-control" id="stkamar" name="stkamar">
                        <option>Pilih Status Kamar</option>
                          <option>Tersedia</option>
                          <option>Tidak Tersedia</option>                                                   
                        </select></div>
                        <p></p>
                        <div class="form-group">
                        <label>Pembayaran Setiap</label>
                        <select class="form-control" id="bayarsetiap" name="Edbayarsetiap">                        
                         <option>Perhari</option>
                          <option>Minggu</option>
                          <option>Bulan</option>
                          <option>3 Bulan</option>
                          <option>6 Bulan</option>
                          <option>1 Bulan</option>                            
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Dihuni</label>
                        <select class="form-control" id="dihuni" name="Eddihuni">                        
                         <option>Seorang</option>
                          <option>2 Orang</option>
                                                    
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="jumlahkamar">Harga Kamar Rp.</label>
                    <input type="number" min="1000" max="10000000" class="form-control" id="hargakamar" name="Edhargakamar" placeholder="Masukan Jumlah Kamar" value="<?php echo $EdtipeKamar['HARGA'];?>">
                    <input type="hidden" class="form-control" name="idtipekamar" value="<?php echo $EdtipeKamar['ID_KAMAR'];?>">                  
                  </div>


                        <div class="form-group">
                        <label for="fotokamar">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fotokamar" name="Edfotokamar" >
                            <label class="custom-file-label" for="fotokamar">Foto Kamar</label>
                        </div>                      
                        <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fotokm"> </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotokm" name="Edfotokamarmandi">
                        <label class="custom-file-label" for="fotokm">Foto Kamar Mandi</label>
                      </div>                      
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>                                             
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </div>
              </form>
                         
            </div>                                
          <!--/.col (left) -->
          
          <!-- right column -->
          
            </div>
            <!-- /.card -->
            
          </div>
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->  
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
<script src="../../plugins/jquery/jquery.mask.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
