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
                <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height active" style="background-image: url(assets/images/kosan1.jpg.jpg);">
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

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form2-9" data-rv-view="38" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container mbr-section__container--sm-padding container" style="padding-top: 27.2px; padding-bottom: 27.2px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                        <b><div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">&nbsp;</h2></div></b>
           
<div class ="container">
<div class ="row">
    <div class="col-sm-12">
    <div class="thumbnail">
    
<ol><h2><center>YA Ngekost</center></h2>
<font size="5">Adalah sebuah aplikasi pencari kos yang menghubungkan antara pemilik dan user atau calon penyewa kost secara online
<li>Pemilik Kos</li>
Adalah seseorang yang dapat mengiklankan kost serta namanya tertera pada surat kepemilikan kost yang dapat dipertanggungjawabkan
<li>User atau Calon Penyewa</li>
Adalah anak kost yang menyewa kamar pada pemilik kost dan melakukan booking serta bayar kost sesuai kontrak yang tercantum didalam deskripsi 
</ul></ol>
<h2><center>Fitur-Fitur Ya Ngekost</h2></center>
Apa yang membedakan aplikasi Ya Ngekos dengan yang lainnya? informasi dari Ya Ngekos sangat jelas dan akurat juga dilengkapi fasilitas kamar dan bersama, Berikut fitur-fitu diantaranya:
<ol>
<li>Fitur Cari Kos</li>
Fitur ini untuk mempermudah pencarian kost yg sesuai dengan kebutuhan pencari kos, dimana kita akan di suguhkan dengan pencarian yg lebih efektif dan efisien yaitu menurut wilayah, harga , dan jenis kos.
<li>Fitur Log In</li>
Fitur ini digunakan untuk proses sewa, tanyak pemilik, dan wishlist, serta fitur lainnya. Penggunaan fitur login ini sangat mudah yaitu dengan memasukkan username dan password  lalu klik Log in.
<li>Fitur Daftar sebagai Pemilik Kos</li>
Fitur ini digunakan untuk mendaftarkan pemilik kos sehingga pemilik kos dapat mengiklankan kosnya. Penggunaanya  yaitu klik tombok Daftar sebagai Pemilik Kos lalu isi data diri, datakos,data tipe kamar dan ikut sesuai dengan petunujuk di aplikasi.
<li>Fitur Daftar Sebag ai Calon Penyewa</li>
Fitur ini digunakan untuk mendaftarkan sebagai calon penyewa sehingga calon penyewa dapat melakukan proses penyewaan di aplikasi.
<li>Fitur Penyewaan</li>
Fitur ini membuat pengguna mampu melihat kost yang sedang dihubunginya. Fitur ini hanya bisa diakses jika pengguna telah login. Penggunaannya dengan cara  mengklik tombol penyewaan maka akan muncul melihat kost yang telah dihubunginya.
<li>Fitur Wishlist</li>
Fitur ini dapat menandai kost yang disukainya.Fitur ini mengharuskan pengguna untuk login terlebih dahulu. Penggunaaanya yaitu  dengan cara  mengklik tombol wishlist.
<li>Fitur Tanya Pemilik</li>
Fitur ini memungkinkan pengguna untuk medapatkan informasi lebih detail mengenai kost yang diinginkannya. 
<li>Fitur Riwayat Pencarian</li>
Fitur ini membuat pengguna mampu melihat kost apa saja yang telah dilihatnya. Fitur ini dapat diakses tanpa login.
<li>Fitur Halaman Pemilik Kost</li>
Fitur ini digunakan untuk mempermudah pemilik kost dalam mengupdate data diri, mengupdate datakos dan menambahkan kos baru apabila pemilik kos mempunyai kos lebih dari satu,serta dapat melihat daftar penyewa yang ada dikos tersebut.
<li>Fitur Tambah Kost</li>
Fitur ini diperuntukkan untuk pemilik kos apabila mempunyai kos lebih dari satu,fitur ini dapat dilakukan jika sudah melakukan proses login.
<li>Fitur Profil Saya</li>
Fitur ini diperuntukkan untuk pemilik kos  atau calon penyewa dimana dapat melihat data diri serta mengedit data diri sesuai dengan keadaan saat ini, fitur ini dapat dilakukan jika sudah melakukan proses login.
<li>Fitur Profil Data Kos</li>
Fitur ini diperuntukkan untuk pemilik kos dimana dapat melihat data kos serta mengedit data diri sesuai dengan keadaan saat ini,fitur ini dapat dilakukan jika sudah melakukan proses login.
<li>Fitur Daftar Penyewa Kost</li>
Fitur ini diperuntukkan untuk pemilik kos dimana dapat melihat siapa saja yg menyewa kos tersebut,fitur ini dapat dilakukan jika sudah melakukan proses login.
<li>Fitur Halaman Calon Penyewa</li>
Fitur ini digunakan untuk mempermudah Calon penyewa dalam mengupdate data diri, mengupdate datakos ,menampilkan wishlist kos , serta penyewaan.
<li>Fitur Logout</li>
Fitur ini digunakan untuk keluar dari aplikasi.
<li>Fitur Pusat Bantuan</li>
Fitur ini digunakan untuk pemilik kos atau calon penyewa apabila mengalami kesulitan dalam penggunaan aplikasi serta untuk memberi informasi tentang aplikasi kos.
</ol></font>


        </div>
    </div>
</div>
</section>
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form2-9" data-rv-view="38" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container mbr-section__container--sm-padding container" style="padding-top: 27.2px; padding-bottom: 27.2px;"></section>

                     <!--footer-->
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
Email: yangekos@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;<br>
Phone: 081333693785<br><br></p><p></p>
                    </div>
                    <div class="col-sm-4"><p class="mbr-contacts__text"><strong>SOSMED</strong></p><ul class="mbr-contacts__list"><li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/">F</a>acebook</li><li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/mobirise-free-win.zip">T</a>witter</li><li>Discord</li></ul></div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-4" data-rv-view="49" style="background-color: rgb(68, 68, 68);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.9px; padding-bottom: 36.9px;">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright">Copyright (c) 2019 YaNgekos <a class="mbr-footer__link text-gray" href="https://mobirise.com/"></a>  | <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Privacy Policy</a></p>
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