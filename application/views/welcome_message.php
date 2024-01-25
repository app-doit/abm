<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kios Tunai, Mesin ABM.">
    <meta property="og:image" content="images/QR.png" />
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>ABM Machine</title>
    <style>
        body {
            background-color: #003366; /* Warna biru mesin ATM */
            color: white; /* Warna teks putih untuk kontras */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
     		color: #FFFF00;
        }

        h1 {
            text-align: center;
        }
    .style1 {font-size: 66px}
    .style2 {font-size: 36px}
    </style>
</head>

<body>
    <div>
        <h1>&nbsp;</h1>
        <h1 class="style1">PLEASE SCAN QR CODE </h1>
        <!-- Isi halaman ATM disini -->
    </div><br>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center"><a href="<?php echo base_url();?>info"><img src="images/nanang.png" height="292" id=""></a></p><br>
    <p align="center">&nbsp;</p>
    <p align="center" class="style2">Silahkan Hubungi customer service untuk <br>mendapatkan izin akses mesin ABM <br>
Atau hubungi support 082388020323</p>
</body>

<script>
$(document).ready(function () {
    $("#toggleFullscreen").trigger("click");    
});

    document.getElementById('toggleFullscreen').addEventListener('click', function () {
        if (document.fullscreenElement) {
            // Exit fullscreen
            document.exitFullscreen();
        } else {
            // Enter fullscreen
            if (document.documentElement.requestFullscreen) {
                document.documentElement.requestFullscreen();
            } else if (document.documentElement.mozRequestFullScreen) { // Firefox
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullscreen) { // Chrome, Safari, and Opera
                document.documentElement.webkitRequestFullscreen();
            } else if (document.documentElement.msRequestFullscreen) { // IE/Edge
                document.documentElement.msRequestFullscreen();
            }
        }
    });
</script>
</html>
