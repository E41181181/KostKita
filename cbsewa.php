<?php 

include 'config.php';

            
          session_start();
          if($_SESSION['status']!="login"){
            header("location:3penyewa/login.php?pesan=belum_login");
          }
            

?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.15, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.15, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="Site Builder Description">
  
  <title>Sewa</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
 <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background" id="form1-0" data-rv-view="24" style="background-image: url(assets/images/bg3.jpg);">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);"></div>
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                <?php		
                                $ambil=$koneksi->query("SELECT * FROM tb_datakos INNER JOIN tb_tipekamar ON tb_datakos.ID_KOS = tb_tipekamar.ID_KOS INNER JOIN tb_pemilik on tb_datakos.ID_PEMILIK = tb_pemilik.ID_PEMILIK WHERE tb_tipekamar.ID_KAMAR='$_GET[id]'");
                               $detail_perkos= $ambil->fetch_assoc();?>
                                <!--<pre><?php print_r($detail_perkos); ?></pre>-->
                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">SEWA</h2>
                        </div>
                        <div data-form-alert="false">
                            <div class="hide" data-form-alert-success="true">Sewa Berhasil
                                                               
                            </div>
                        </div>
                        <form method="post" action="pcsewa.php">
                            <input type="hidden" value="jQCgYeJ824odq/haU/Kyc/Pz2lntCtNbGH9/HVU/oytjPNL0b3iYN4PT/yBMQRLV5mKFwfvUuikKt93gPNDP5yc+GZh8vchoit6Veh4uFnR2WuL2yeHN0Vkjh7NbcXk/" data-form-email="false">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="idsewa" >
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="idkos"  value="<?php echo $detail_perkos['ID_KOS'];?>">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="idkamar"  value="<?php echo $detail_perkos['ID_KAMAR'];?>">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="idpemilik" value="<?php echo $detail_perkos['ID_PEMILIK'];?>">
                            </div>
                            <div class="form-group">
                            <label>Penyewa</label>
                                <input type="text" class="form-control" name="idpenyewatampil" disabled value="<?php echo $_SESSION['username'];?>">
                                <input type="hidden" class="form-control" name="idpenyewa"  value="<?php echo $_SESSION['username'];?>">
                            </div>                            
                            <div class="form-group">
                                <label>Nama Kos</label>
                                <input type="text" class="form-control" name="Nama Kost"  disabled value="<?php echo $detail_perkos['NAMA_KOS'];?>">
                            </div>
                            <div>
                            <label><h3>ALAMAT</h3></label>                            
                            <div class="form-group">
                                <label>Jalan</label>
                                <input type="text" class="form-control" name="alamatjalan" disabled value="<?php echo $detail_perkos['JALAN_KOS'];?>">
                            </div>
                            <div class="form-group">
                            <label>Kecamatan</label>
                                <input type="text" class="form-control" name="alamatkec" disabled value="<?php echo $detail_perkos['KEC_KOS'];?>">
                            </div>                            
                            <div class="form-group">
                            <label>Kabupaten</label>
                                <input type="text" class="form-control" name="alamatkab" disabled value="<?php echo $detail_perkos['KAB_KOS'];?>">
                            </div>
                            <div class="form-group">
                            <label>Alamat Lengkap</label>
                                <input type="text" class="form-control" name="alamatket" disabled value="<?php echo $detail_perkos['KET_ALAMAT_KOS'];?>">
                            </div>
                            </div>
                            <div class="form-group">
                            <label>Nama Pemilik</label>
                                <input type="hidden" class="form-control" name="nohp" disabled value="<?php echo $detail_perkos['NO_HP_PEMILIK'];?>">
                                <input type="text" class="form-control" name="namapemelik" disabled value="<?php echo $detail_perkos['NAMA_PEMILIK'];?>">
                            </div>
                            <div class="form-group">
                            <label>Harga</label>
                                <input type="text" class="form-control" name="alamatket" disabled value="<?php echo "Rp. " ; ?><?php echo $detail_perkos['HARGA'];?>">
                            </div>
                                                                                 
                            <div class="mbr-buttons mbr-buttons--right">                                
                                <button type="submit"  class="mbr-buttons__btn btn btn-lg btn-danger" >Lanjutkan</button>
                                <a href="index.php" class="mbr-buttons__btn btn btn-lg btn-danger">Batal</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a href="https://mobirise.info/f">easy site builder</a></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-3" data-rv-view="33" style="background-color: rgb(60, 60, 60);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 45px; padding-bottom: 45px;">
            <div class="col-sm-4">
                <div><a href="https://mobirise.com" class="mbri-globe mbr-iconfont mbr-iconfont-contacts1"></a></div>
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
Email: ulala@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;<br>
Phone: 081333693785<br><br></p><p></p>
                    </div>
                    <div class="col-sm-4"><p class="mbr-contacts__text"><strong>LINKS</strong></p><ul class="mbr-contacts__list"><li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/">F</a>acebook</li><li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/mobirise-free-win.zip">T</a>witter</li><li>Discord</li></ul></div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-4" data-rv-view="35" style="background-color: rgb(68, 68, 68);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.9px; padding-bottom: 36.9px;">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright">Copyright (c) 2015 Company Name. <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Privacy Policy</a></p>
            </div>
        </div>
    </div>
</footer>


  <!-- <script src="assets/web/assets/jquery/jquery.min.js"></script> -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
 
    <!-- <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script> -->
 
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>