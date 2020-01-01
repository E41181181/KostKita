<?php 
include 'config.php';

$a="SELECT * FROM tb_sewa WHERE STATUS_BAYAR = 'Belum Membayar'";
$sql =mysqli_query($koneksi,$a);
while($tanggal=mysqli_fetch_array($sql)){
$date1=$tanggal['TANGGAL_BAYAR'];
$date2=$tanggal['TANGGAL_JATUH_TEMPO'];
$idsewa=$tanggal['ID_SEWA'];
echo '<br>';
echo $idsewa;
echo '<br>';
echo $date1;
echo '<br>';
echo $date2;
echo '<br>';
$hitdate = $date2 - $date1;
echo $hitdate;
echo '<br>';
$date3 = $hitdate;
echo $date3;
echo '<br>'; 
              
              
              if ($date3>=1){
                  while($kembali=mysqli_fetch_array($sql)){
                      echo $idsewa = $kembali['ID_SEWA'];
                      echo $idsewa;
                      echo '<br>';
                      echo $st_by = $kembali['STATUS_BAYAR'];
                      echo '<br>';
                      echo $nama = $kembali['ID_PEMILIK'];
                      echo '<br>';
                      
                      echo '<br>';
                      echo '<br>';
                     
                  }
                  mysqli_query($koneksi,"UPDATE tb_sewa SET STATUS_BAYAR = 'Membatalkan' WHERE tb_sewa.ID_SEWA ='$idsewa'");
              }
            }
            header("location:sewaPemilik.php");
?>