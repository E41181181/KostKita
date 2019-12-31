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
            <h1>Ubah Data Kost</h1>
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
        <?php
		
		 $ambil=$koneksi->query("SELECT * FROM tb_datakos  WHERE ID_KOS='$_GET[id]'");
		$EdDatakos= $ambil->fetch_assoc();
		?>
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Kost</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data" action="prosesEditDatakos.php">
              <div class="card-body">                  
                <div class="card-body">
                  <div class="form-group">
                    <label for="namakost">Nama KOST</label>                    
                    <input type="text" class="form-control" id="namakost" name="namakost" placeholder="Masukan Nama Kost" value="<?php echo $EdDatakos['NAMA_KOS'];?>">
                    <input type="hidden" class="form-control" id="namakost" name="idkost" placeholder="Masukan Nama Kost" value="<?php echo $EdDatakos['ID_KOS'];?>">
                  </div>
                  <div class="form-group">
                    <label for="alamatkostjl">Alamat KOST</label>
                    <input type="text" class="form-control" id="alamatkostjalan" name="alamatkostjalan"  placeholder="Jalan" value="<?php echo $EdDatakos['JALAN_KOS'];?>">
                  </div>
                  <div class="form-group">
                    <label for="alamatkostkec"> </label>
                    <input type="text" class="form-control" id="alamatkostkec" name="alamatkostkec" placeholder="Kecamatan" value="<?php echo $EdDatakos['KEC_KOS'];?>">
                  </div>                  
                  <div class="form-group">
                    <label for="alamatkostkab"> </label>
                    <input type="text" class="form-control" id="alamatkostkab" name="alamatkostkab" placeholder="Kabupaten" value="<?php echo $EdDatakos['KAB_KOS'];?>">
                  </div>
                  <div class="form-group">
                    <label for="alamatkostket"> </label>
                    <input type="text" class="form-control" id="alamatkostkab" name="alamatkostket" placeholder="Keterangan Alamat" value="<?php echo $EdDatakos['KET_ALAMAT_KOS'];?>">
                  </div>
                  <div class="form-group">
                        <label>Jenis Kost</label>
                        <select class="form-control" id="jeniskost" name="jeniskost">
                        <option>Pilih Jenis Kost</option>
                          <option>Putra</option>
                          <option>Putri</option>
                          <option>Campur</option>                          
                        </select>
                      </div>
                  <div class="form-group">
                          <label>Fasilitas Kos</label>
                          <textarea class="form-control" rows="3" name="fasilitaskos" placeholder="Fasilitas Bersama(Dapur, Jemuran, Kamar Mandi, Parkiran dll)"><?php echo $EdDatakos['FASILITAS_KOS'];?></textarea>
                  </div> 
                  <div class="form-group">
                    <label for="jumlahkamar">Jumlah Kamar</label>
                    <input type="number" min="1" max="150" class="form-control" id="jumlahkamar" name="jumlahkamar" placeholder="Masukan Jumlah Kamar" value="<?php echo $EdDatakos['JUMLAH_KAMAR'];?>">
                  </div>
                  <div class="form-group">
                    <label for="fotobangunan">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotokos" name="fotokos" required>
                        <label class="custom-file-label" for="fotobangunan">Foto Bangunan</label>                        
                      </div>                      
                      <div class="input-group-append">
                        <span class="input-group-text" id="uploadfotokos">Upload</span>
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
            
            <!-- /.card -->          

          
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
