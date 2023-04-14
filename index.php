<?php
$nama = "Meisya Rahmasari";
$ttl = "Boyolali, 31 Mei 2002";
$jnskelamin ="Perempuan";
$alamat ="Semarang, Jawa Tengah";
$rwytpendidikan ="1. SMA Negeri 1 Cepogo  (2017-2020)<br>2. Universitas Negeri Semarang (2020-sekarang)";
$hobby="Mendengarkan lagu";
?>

<html>
    <head>
        <title>Biodata Diri</title>
        <style>
            .container{
                display: flex;
                justify-content: center;
                margin-left:auto;
                margin-right:auto;
            }
            .child{
                width: 500px;
                padding: 10px;
                background: pink;
            }
        </style>
    </head>
    <body class="container">
        <div class="child">
            <?php
                echo "
                    <center>
                    <table>
                        <center><h1>Biodata Diri</h1></center>
                        <tr rowspan=14><img src='assets/img/foto.jpg' style='width:140px'></tr> 
                        <tr>
                            <td>Nama lengkap</td>
                            <th>:</th>
                            <td>$nama</td>                       
                        </tr>
                        <tr>
                            <td>Tempat, tanggal lahir</td>
                            <th>:</th>
                            <td>$ttl</td>
                        </tr>
                        <tr>
                            <td>Jenis kelamin</td>
                            <th>:</th>
                            <td>$jnskelamin</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <th>:</th>
                            <td>$alamat</td>
                        </tr>
                        <tr>
                            <td>Riwayat pendidikan</td>
                            <th>:</th>
                            <td>$rwytpendidikan</td>
                        </tr>
                        <tr>
                            <td>Hobby</td>
                            <th>:</th>
                            <td>$hobby</td>
                        </tr>
                    </table>
                    </center>
                "
            ?>
        </div>
    </body>
</html>