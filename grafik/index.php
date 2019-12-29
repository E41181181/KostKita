<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="chart.js"></script>
</head>
<body>
    <style type="text/css">
    body{
        font-family: roboto;
    }
 
    table{
        margin: 0px auto;
    }
    </style>
    <?php 
    include 'koneksi.php';
    ?>
 
    <div style="width: 800px;margin: 0px auto;">
        <canvas id="myChart"></canvas>
    </div>
 
    <br/>
    <br/>
<div style="text-align: center;">
 <table border="1" style="display: inline">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemilik</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            $data = mysqli_query($koneksi,"select * from tb_pemilik");
            while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['NAMA_PEMILIK']; ?></td>
                </tr>
                <?php 
            }
            ?>
        </tbody>
    </table>
    <table border="1" style="display: inline">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penyewa</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            $data = mysqli_query($koneksi,"select * from tb_penyewa");
            while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['NAMA_PENYEWA']; ?></td>
                </tr>
                <?php 
            }
            ?>
        </tbody>
    </table>
 </div>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["PEMILIK", "PENYEWA"],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $jumlah_pemilik = mysqli_query($koneksi,"select * from tb_pemilik");
                    echo mysqli_num_rows($jumlah_pemilik);
                    ?>, 
                    <?php 
                    $jumlah_penyewa = mysqli_query($koneksi,"select * from tb_penyewa");
                    echo mysqli_num_rows($jumlah_penyewa);
                    ?>], 
                   
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>