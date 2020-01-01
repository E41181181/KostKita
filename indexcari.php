<?php            
session_start();


if(isset($_SESSION['level'])){
    if($_SESSION['level'] == "2"){
        include 'navbarLoginPemilik.php';
    }else if($_SESSION['level'] == "3"){
        include 'navbarLoginPenyewa.php';
    }
}else include 'navbarAwal.php';


  
?>
<section class="engine"><a href="#">website templates</a></section><section class="mbr-slider mbr-section mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="5000" id="slider-7" data-rv-view="29" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container">
        <div>
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider-7" class="active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider-7" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height active" style="background-image: url(assets/images/kostbali.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--center-right mbr-box__magnet--sm-padding mbr-after-navbar">
                                            
                        <div class=" container">
                            
                            <div class="row">
                                <div class=" col-md-6 col-md-offset-5">  

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Mau Cari Kost?</h1></font>

                                    <p class="mbr-hero__subtext">Tapi binggung?<br><br></p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--left mbr-buttons--right"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="#">Cari Kost</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(assets/images/kosan2.jpg.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--center-left mbr-box__magnet--sm-padding mbr-after-navbar">
                                            
                        <div class=" container">
                            
                            <div class="row">
                                <div class=" col-md-offset-1 col-md-6">  

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Mau iklankan kos ?</h1>

                                    <p class="mbr-hero__subtext">Ya Ngekos saja! Gratis Simple dan cepat</p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="register01.php">Daftar</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-7">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-7">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form2-9" data-rv-view="38" style="background-color: rgb(124, 112, 107);">
    
    <div class="mbr-section__container mbr-section__container--sm-padding container" style="padding-top: 27.2px; padding-bottom: 27.2px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">Cari Kost&nbsp;</h2>
                        </div>                        
 <form action="indexcari.php" method="post" >                            
   <div class="container">
      <div class="row ">
      <div class="col ">
        <div class="col-sm-10">
           <form group>
           <input type="text" class="form-control" name="cari" placeholder=" cari kos berdasarkan  Lokasi / Jenis / Harga / Nama Kos " >
           <span  class="fas fa-search"></span>  
        </div>
    <div class="col-sm-2">
         <button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger">
        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>Cari</button>
        </div>  
        </div>
      </div>
                           
                     </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BAGIAN PENCARIAN-->

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-8" data-rv-view="44" style="background-color: rgb(255, 255, 255);">            
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">

    <?php
     $numOfCols = 3;
     $rowCount = 0;
     $bootstrapColWidth = 12 / $numOfCols;
     ?>

<?php
            include ('config.php');
            $keyword = $_POST['cari'];
            $ambil = $koneksi->query("SELECT * FROM tb_datakos INNER JOIN tb_tipekamar ON tb_datakos.ID_KOS = tb_tipekamar.ID_KOS WHERE tb_tipekamar.ST_POST ='1' 
                AND tb_tipekamar.STATUS_KAMAR ='Tersedia' AND 
                FASILITAS_KAMAR LIKE '&".$keyword."%' 
                OR NAMA_KOS LIKE '%".$keyword."%'
                OR JENIS_KOS LIKE '%".$keyword."%' 
                OR KET_ALAMAT_KOS LIKE '%".$keyword."%' 
                OR HARGA LIKE '%".$keyword."%' 
                OR id_pemilik LIKE '%".$keyword."%' 
                OR kab_kos LIKE '%".$keyword."%' 
                OR kec_kos LIKE '%".$keyword."%' 
                OR jalan_kos LIKE '%".$keyword."%' "); ?>

 <?php $hitung = mysqli_num_rows($ambil); 
  if($hitung>0){ 
  while ($perkos = $ambil->fetch_array()) { ?>
            <div class="col-md-4">
                <div class="thumbnail">
                    
                        <div class="caption">
                            <p><center><font size ="4"><?php echo $perkos['NAMA_KOS'];?></center></font></br>
                            <center><img src="aset_fot/<?php echo $perkos['FOTO_KOS'];?>" width="320px" height="300px"></br></p>
                            <font size ="3"><b>Harga : Rp<?php echo number_format($perkos['HARGA']) ;?></b></font></br>
                            <font size ="3">Kos <?php echo $perkos['JENIS_KOS'];?><br>
                            <td> Stok Kamar : <?php echo $perkos['STOK_KAMAR'];?></br>
                            <?php echo $perkos['KET_ALAMAT_KOS'];?></br></center>
                            <p><center><a href="page2.php?id=<?php echo $perkos['ID_KOS']; ?>" class="btn btn-info">Lihat Lebih Lengkap</a></center></font></p>
                            
                        </div>
                        
                </div>
            </div>
            <?php }?>

        </div>
    </div>

            <?php 
                $rowCount++;
                if ($rowCount % $numOfCols == 0) echo '</div><div class="row">';
                    }
                    else echo "<script>alert('Pencarian Kos Anda Tidak Ditemukan'); location='index.php';</script>";
                
                     ?>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-3" data-rv-view="47" style="background-color: rgb(60, 60, 60);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 45px; padding-bottom: 45px;">
            <div class="col-sm-4">
                <div><a href="#" class="mbri-globe mbr-iconfont mbr-iconfont-contacts1"></a></div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>
Jl.Teratai 3 No 1<br>
Jember</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"></p><p><strong>CONTACTS</strong><br>
Email: Yangekos@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;<br>
Phone: 081333693785<br><br></p><p></p>
                    </div>
                    <div class="col-sm-4"><p class="mbr-contacts__text"><strong>LINKS</strong></p><ul class="mbr-contacts__list"><li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/">F</a>acebook</li><li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/mobirise-free-win.zip">T</a>witter</li><li>Discord</li></ul></div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-4" data-rv-view="49" style="background-color: rgb(68, 68, 68);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.9px; padding-bottom: 36.9px;">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright">Copyright (c) 2019 YaNgekos <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Privacy Policy</a></p>
            </div>
        </div>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <!--[if lte IE 9]>
    <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script>
  <![endif]-->
  <script src="assets/mobirise/js/script.js"></script>
  <script src="assets/dropdown-menu/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>