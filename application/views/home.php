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
        body, html {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        #fullscreenIframe {
            width: 100vw;
            height: 100vh;
            border: none; /* Menghilangkan border iframe jika ada */
        }
    </style>
</head>

<body>
    <div align="center" id="bar"><a  id="toggleFullscreen">Fullscreen</a></div>

<iframe id="fullscreenIframe" src="<?php echo base_url();?>welcome" style="width: 100vw; height: 100vh; border: none;"></iframe>

</body>

<script>


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
            $("#bar").hide();
        }
    });
</script>
</html>
