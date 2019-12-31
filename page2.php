<?php
session_start();
//koneksi ke database kita
$koneksi= new mysqli ("localhost","root","","11des");
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v4.10.15, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.10.15, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="Website Generator Description">

    <title>Menu kost</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/mobirise/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>

<body>
    <section
        class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse mbr-navbar--transparent"
        id="menu-1" data-rv-view="41">
        <div class="mbr-navbar__section mbr-section">
            <div class="mbr-section__container container">
                <div class="mbr-navbar__container">
                    <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                        <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">

                            <span class="mbr-brand__name"><a class="mbr-brand__name text-white"
                                    href="https://mobirise.com">Ya NgeKost</a></span>
                        </span>
                    </div>
                    <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                    <div class="mbr-navbar__column mbr-navbar__menu">
                        <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                            <div class="mbr-navbar__column">
                                <ul
                                    class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
                                    <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white"
                                            href="https://mobirise.com">HOME</a></li>
                                    <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white"
                                            href="https://mobirise.com">Cari Kost</a></li>
                                    <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white"
                                            href="https://mobirise.com">FAQ</a></li>
                                </ul>
                                <ul
                                    class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active">
                                    <li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-default"
                                            href="https://mobirise.com">Daftar</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="engine"><a href="https://mobirise.info/s">bootstrap theme</a></section>
    <section class="mbr-section mbr-section--relative mbr-after-navbar" id="msg-box4-c" data-rv-view="43"
        style="background-color: rgb(37, 37, 37);">

        <div class="mbr-section__container mbr-section__container--isolated container"
            style="padding-top: 93px; padding-bottom: 93px;">
            <div class="row">
            <?php		
                                $ambil=$koneksi->query("SELECT * FROM tb_datakos INNER JOIN tb_tipekamar ON tb_datakos.ID_KOS = tb_tipekamar.ID_KOS INNER JOIN tb_harga WHERE tb_tipekamar.ID_KAMAR = tb_harga.ID_KAMAR AND  tb_datakos.ID_KOS='$_GET[id]'");
                               $detail_perkos= $ambil->fetch_assoc();?>
                                <!--<pre><?php print_r($detail_perkos); ?></pre>-->
                <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                    <div class="mbr-box__magnet mbr-box__magnet--top-right mbr-section__left col-sm-6 image-size"
                        style="width: 50%;">
                        <figure
                            class="mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width">
                            <img src="foto_kos/<?php echo $detail_perkos['FOTO_KOS'];?>" width="500px" height="300px"
                                class="mbr-figure__img"></figure>

                       
                            <a class="gmaps" href="<?php echo $detail_perkos['MAPS'];  ?>" target="_blank">Buka Di Google Maps</a>
                    </div>
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
                            <tr>	
                                <td>Jalan</td>
                                <td> :</td>
                                <td><?php echo $detail_perkos['JALAN_KOS'];?></td>
                            </tr><br>
                            <tr>
                                <td>kecamatan</td>
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
                        </table>                                                  
                        </div>                         
                    </div>
                        <a href="sewa.php?id=<?php echo $detail_perkos['ID_KOS']; ?>" class="btn btn-Danger">Sewa</a>
                        <a href="https://api.whatsapp.com/send?phone=<?= $detail_perkos['WA']; ?>"class="btn btn-info">tanya pemilik</a>
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


</body>

</html>