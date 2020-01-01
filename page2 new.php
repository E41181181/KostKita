<?php
session_start();
//koneksi ke database kita
$koneksi= new mysqli ("localhost","root","","11des");


if(isset($_SESSION['level'])){
    if($_SESSION['level'] == "2"){
        include 'navbarLoginPemilik.php';
    }else if($_SESSION['level'] == "3"){
        include 'navbarLoginPenyewa.php';
    }
}else include 'navbarAwal.php';


  

?>


    <section class="engine"><a href="https://mobirise.info/s">bootstrap theme</a></section>
    
    <section class="mbr-gallery mbr-section mbr-section--no-padding" id="gallery1-x" data-rv-view="19" style="background-color: rgb(105, 105, 105);">
    
    <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 content-size mbr-section__right" style="background-color: rgb(105, 105, 105);">
    <?php       
                               $ambil=$koneksi->query("SELECT * FROM tb_datakos 
                               INNER JOIN tb_tipekamar ON tb_datakos.ID_KOS = tb_tipekamar.ID_KOS 
                               INNER JOIN tb_pemilik on tb_datakos.ID_PEMILIK =tb_pemilik.ID_PEMILIK
                               WHERE tb_tipekamar.ID_KAMAR='$_GET[id]'");
                               $detail_perkos= $ambil->fetch_assoc();?>
                                <!--<pre><?php print_r($detail_perkos); ?></pre>-->
    <p>   </p><p>  </p>     <p></p>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text"><font color="white"> <p>  </p>
                                
                        <?php echo "<br>";?>
                        
                        
                        </font></h3>
                            
                        </div>
                        <div><p></p></div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--auto-align mbr-article--wysiwyg"><p></p></div>
                    </div>
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align btn-inverse"><a  href="https://mobirise.com"></a></div>
                    </div>
                </div>
    <!-- Gallery -->
    <div class=" mbr-gallery-layout-default">
        <div>
            <div class="row mbr-gallery-row no-gutter">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mbr-gallery-item">
                    <a href="#lb-gallery1-x" data-slide-to="0" data-toggle="modal">
                    <?php echo "<img src='aset_fot/".$detail_perkos['FOTO_KOS']."' width='500px' height='480px' />";?>
                        <span class="icon glyphicon glyphicon-zoom-in"></span>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mbr-gallery-item">
                    <a href="#lb-gallery1-x" data-slide-to="1" data-toggle="modal">
                    <?php echo "<img src='aset_fot/".$detail_perkos['FOTO_KAMAR']."' width='500px' height='480px' />";?>
                        <span class="icon glyphicon glyphicon-zoom-in"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-x">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-x" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-x" data-slide-to="1"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-x" data-slide-to="2"></li>                        
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                        <?php echo "<img src='aset_fot/".$detail_perkos['FOTO_KOS']."' width='500px' height='450px' />";?>
                        </div><div class="item">
                        <?php echo "<img src='aset_fot/fototipekamar/".$detail_perkos['FOTO_KAMAR']."' width='500px' height='480px' />";?>
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-x">
                        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-x">
                        <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>         
    </div>
    
    
     <section class="engine"><a href="#">website templates</a></section><section class="mbr-slider mbr-section mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="5000" id="slider-7" data-rv-view="29" style="background-color: rgb(105, 105, 105);">
    <div class="mbr-section__container">
        <div>


        <div class="mbr-section__container mbr-section__container--isolated container"
            style="padding-top: 93px; padding-bottom: 93px;">
            <div class="row">           
                
                    <div
                        class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 content-size mbr-section__right">
                        <div class="mbr-section__container mbr-section__container--middle">
                            <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                                <h3 class="mbr-header__text"><?php echo $detail_perkos['NAMA_KOS'];?></h3>
                            </div>
                        </div>
                        <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--auto-align mbr-article--wysiwyg">
                            <!--ISIAN-->
                            <font color="white">  
                            <tr>	
                                <td>Jalan</td>
                                <td> :</td>
                                <td><?php echo $detail_perkos['JALAN_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Kecamatan</td>
                                <td> :</td>
                                <td><?php echo $detail_perkos['KEC_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Kabupaten </td>
                                <td>:</td>
                                <td><?php echo $detail_perkos['KAB_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Alamat kos </td>
                                <td>:</td>
                                <td><?php echo $detail_perkos['KET_ALAMAT_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Jenis kos</td>
                                <td> :</td>
                                <td><?php echo $detail_perkos['JENIS_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Fasilitas kos </td>
                                <td>:</td>
                                <td><?php echo $detail_perkos['FASILITAS_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>Jumlah kamar</td>
                                <td> :</td>
                                <td><?php echo $detail_perkos['JUMLAH_KAMAR'];?></td>
                            </tr><br>
                            <tr>
                            <td><b><h3>Detail Kamar</b><td></h3></tr>
                            <tr>
                                <td>Ukuran Kamar</td>
                                <td> : </td>
                                <td><?php echo $detail_perkos['UKURAN_KAMAR'];?></td></tr><br>
                            <tr>
                                <td>Fasilitas Kamar</td> 
                                <td>:</td>
                                <td><?php echo $detail_perkos['FASILITAS_KAMAR'];?></td></tr><br>
                            <tr>
                                <td>Stok Kamar</td>
                                <td>:</td>
                                <td><?php echo $detail_perkos['STOK_KAMAR'];?></td></tr><br>
                            <tr>
                                <td><b><h3>Detail Harga</b><td></h3></tr>
                            <tr>
                                <td>Harga</td> 
                                <td>:</td>
                                <td>Rp.<?php echo number_format( $detail_perkos['HARGA']);?></td></tr><br>
                            <tr>
                                <td>Pembayaran Setiap </td>
                                <td>:</td>
                                <td><?php echo $detail_perkos['DIBAYAR_SETIAP'];?></td></tr><br>
                            <tr>
                                <td>Penghuni PerKamar</td>
                                <td> :</td>
                                <td><?php echo $detail_perkos['PENGHUNI'];?></td></tr><br>
                            <tr>
                                <td>Peraturan Kos</td>
                                <td>:</td>
                                <td><?php echo $detail_perkos['KETERANGAN'];?></td></tr><br>
                        </font>
                        </table>                                                  
                        </div>                         
                    </div>
                        <a href="cbsewa.php?id=<?php echo $detail_perkos['ID_KAMAR']; ?>" class="btn btn-info">Sewa</a>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo $detail_perkos['NO_HP_PEMILIK']; ?>"class="btn btn-info" target="_blank">tanya pemilik</a>
                        <a href="wishlist.php?id=<?php echo $detail_perkos['ID_KOS'];?>" class="btn btn-info">Wishlist</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-5" data-rv-view="48"
        style="background-color: rgb(60, 60, 60);">

        <div class="mbr-section__container container">
            <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 45px; padding-bottom: 45px;">
                <div class="col-sm-4">
                    <div><a href="https://mobirise.com" class="mbri-globe mbr-iconfont mbr-iconfont-contacts1"></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>
                                Jl.Teratai 3 No 1<br>
                                Jember</p>
                        </div>
                        <div class="col-sm-4">
                            <p class="mbr-contacts__text"></p>
                            <p><strong>CONTACTS</strong><br>
                                Email: ulala@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                Phone: 081333693785<br><br></p>
                            <p></p>
                        </div>
                        <div class="col-sm-4">
                            <p class="mbr-contacts__text"><strong>LINKS</strong></p>
                            <ul class="mbr-contacts__list">
                                <li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/">F</a>acebook
                                </li>
                                <li><a class="mbr-contacts__link text-gray"
                                        href="https://mobirise.com/mobirise-free-win.zip">T</a>witter</li>
                                <li>Discord</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-6" data-rv-view="50"
        style="background-color: rgb(68, 68, 68);">

        <div class="mbr-section__container container">
            <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.9px; padding-bottom: 36.9px;">
                <div class="col-sm-12">
                    <p class="mbr-footer__copyright">Copyright (c) 2015 Company Name. <a
                            class="mbr-footer__link text-gray" href="https://mobirise.com/">Terms of Use</a> | <a
                            class="mbr-footer__link text-gray" href="https://mobirise.com/">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </footer>


    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smooth-scroll/smooth-scroll.js"></script>
    <script src="assets/mobirise/js/script.js"></script>
    <script src="assets/dropdown-menu/script.js"></script>


</body>

</html>