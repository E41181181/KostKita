 <html>  
<head>  
<title></title>  
</head>  
<body>  
<div id="map_canvas" style="width:100%; height:100%;">  
       
</div>  
</body>  
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>  
 <script type="text/javascript">  
 (function() {  // fungsi untuk dijalankan ketika halaman web dubuka  
var infowindow = null;  
      
initialize(); // mengeksekusi fungsi initialize()  
    
 })();  
      
   
  function initialize() {  
      // Baris berikut digunakan untuk mengisi marker atau tanda titik di peta  
       var sites = [  
   
        ['Polinela', -5.358725,105.233413 ,1, '<h4>Politeknik Negeri Lampung</h4><p>Keterangan didalam marker</p>'], // pertama merupakan judul market, kedua adalah titik koordinan latitude, ketiga longitude, dan keempat merupakan z index (titik mana yang ditampilkan lebih dulu) untuk menentukan titik mana diatas titik mana, ketiga merupakan isi keterangan marker nya.  
         ['Unila', -5.364505,105.243442 ,2, '<h4>Universitas Lampung</h4><p>Keterangan didalam marker</p>'],  
    
       ];  
        var centerMap = new google.maps.LatLng(-5.387625, 105.249326); // mengatur pusat peta  
         
       var myOptions = {  
          zoom: 13, // level zoom peta  
        center: centerMap, // setting pusat peta ke centerMap  
        mapTypeId: google.maps.MapTypeId.ROADMAP //menentukan tipe peta  
      }  
    
       var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); //menempatkan peta pada div dengan ID map_canvas di html  
   
      setMarkers(map, sites); // memanggil fungsi setMarker untuk menandai titik di peta.  
         
        infowindow = new google.maps.InfoWindow({  
           content: "loading..."  
         });  
    
       var bikeLayer = new google.maps.BicyclingLayer();  
       bikeLayer.setMap(map); //memnunculkan peta  
         
     }  
  
      
      
   
       function setMarkers(map, markers) {  
               //berikut merupakan perulangan untuk membaca masing masing titik yang telah kita definisikan di sites[];  
      for (var i = 0; i < markers.length; i++) {  
         var sites = markers[i];  
         var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);  
         var marker = new google.maps.Marker({  
         position: siteLatLng,  
         map: map,  
         title: sites[0],  
         zIndex: sites[3],  
         html: sites[4]  
  
        });  
   
         var contentString = "Some content";  
        // berikut merupakan fungsi untuk mengatur agar keterangan marker muncuk ketika mouse diarahkan ke marker (mouse over)  
         google.maps.event.addListener(marker, "mouseover", function () {  
            
          infowindow.setContent(this.html);  
          infowindow.open(map, this);  
        });  
      }  
    }  
  //-----------------------------MEMBUAT TITIK --------------------------

<div id="map_canvas" style="width:100%; height:100%;">  
           
 </div>  
 </body>  
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>  
  <script type="text/javascript">  
 var infowindow = null;  
  (function() {  // fungsi untuk dijalankan ketika halaman web dubuka  
     
      
   initialize(); // mengeksekusi fungsi initialize()  
     
  })();  
      
    
    function initialize() {  
        // Baris berikut digunakan untuk mengisi marker atau tanda titik di peta  
        var sites = [  
    
       ['Polinela', -5.358725,105.233413 ,1, '<h4>Politeknik Negeri Lampung</h4><p>Keterangan didalam marker</p>'], // pertama merupakan judul market, kedua adalah titik koordinan latitude, ketiga longitude, dan keempat merupakan z index (titik mana yang ditampilkan lebih dulu) untuk menentukan titik mana diatas titik mana, ketiga merupakan isi keterangan marker nya.  
         ['Unila', -5.364505,105.243442 ,2, '<h4>Universitas Lampung</h4><p>Keterangan didalam marker</p>'],  
    
        ];  
        var centerMap = new google.maps.LatLng(-5.387625, 105.249326); // mengatur pusat peta  
          
        var myOptions = {  
          zoom: 13, // level zoom peta  
          center: centerMap, // setting pusat peta ke centerMap  
          mapTypeId: google.maps.MapTypeId.ROADMAP //menentukan tipe peta  
        }  
    
        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); //menempatkan peta pada div dengan ID map_canvas di html  
    
        setMarkers(map, sites); // memanggil fungsi setMarker untuk menandai titik di peta.  
        setAction(map); //tambahan dari tutorial 2 untuk memanggil fungsi setAction(map);  
        infowindow = new google.maps.InfoWindow({  
            content: "loading..."  
          });  
    
        var bikeLayer = new google.maps.BicyclingLayer();  
        bikeLayer.setMap(map); //memnunculkan peta  
          
      }  
    
        
    
    
    
        function setMarkers(map, markers) {  
         //berikut merupakan perulangan untuk membaca masing masing titik yang telah kita definisikan di sites[];  
        for (var i = 0; i < markers.length; i++) {  
          var sites = markers[i];  
          var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);  
          var marker = new google.maps.Marker({  
            position: siteLatLng,  
            map: map,  
            title: sites[0],  
            zIndex: sites[3],  
            html: sites[4]  
    
          });  
    
          var contentString = "Some content";  
          // berikut merupakan fungsi untuk mengatur agar keterangan marker muncuk ketika mouse diarahkan ke marker (mouse over)  
          google.maps.event.addListener(marker, "mouseover", function () {  
              
            infowindow.setContent(this.html);  
            infowindow.open(map, this);  
          });  
        }  
      }  
    
      //-----------------------------------Tambahan1 dari tutorial 2 -----------------------------------------------  
    
        function setAction(map){  
            
          google.maps.event.addListener(map, "rightclick", function(event) {  
    
         if(confirm("Tandai Titik Ini? (klik pada tanda yang muncul untuk melihat pilihan)")){  
            var lat = event.latLng.lat();  
            var lng = event.latLng.lng();  
            //memasukkan dan menyimpan ke database .
            var form = '<h4>Tambah Data</h4><form id="formtambahdata" method="post" action="simpan.php"><br><input type="text" id="nama" placeholder="nama tempat" name="nama"><br><textarea id="keterangan" name="keterangan" placeholder="Isi Keterangan tempat"></textarea><br><input type="text" id="latlng" name="latlng" value="'+lat+','+lng+'"><br><input type="submit" value="Simpan"></form>';  
            var siteLatLng = new google.maps.LatLng(lat, lng);  
            var marker = new google.maps.Marker({  
                position: siteLatLng,  
                map: map,  
                title: "add data",  
                zIndex: 100,  
                html: form  
    
              });  
             google.maps.event.addListener(marker, "mouseover", function () {  
                  
                infowindow.setContent(this.html);  

                infowindow.open(map, this);  
              });  
    
          }  
            
        });  
        }  
    
      //-----------------------------------akhir tambahan1 dari tutorial 2-----------------------------------------  
    
    
  </script>  

 </script>  
 </html>