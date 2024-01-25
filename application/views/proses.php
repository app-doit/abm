<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Page</title>
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
    </style>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        #timer {
            font-size: 24px;
            text-align: center;
            margin-top: 50px;
        }
    </style>
    
</head>

<body>
    <div>
        <h1>&nbsp;</h1>
        <h2 align="center">PLEASE WAIT </h2>
        <h2>
          <p align="center">MOHON TUNGGU SEBENTAR </p>
        </h2>
        <h2 align="center"></h2>
        <h2>

        </h2>
        <h2>&nbsp;</h2>
        <!-- Isi halaman ATM disini -->
    </div>
<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
 
    <div id="timer"></div>
    
<script>
    $(document).ready(function () {
        var seconds = 3;

        function updateTimer() {
           // $('#timer').text(seconds);
            if (seconds === 0) {
                clearInterval(timerInterval);
                // Timer has reached 0, you can perform additional actions here
                //alert('Timer has finished!');
                window.location.href = "<?php echo base_url();?>pilihbahasa";
            } else {
                seconds--;
            }
        }

        // Update the timer every 1000 milliseconds (1 second)
        var timerInterval = setInterval(updateTimer, 1000);
    });
</script>
</body>

</html>
