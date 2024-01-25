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
			color: #FAF271;
        }
		
    /* Mengubah warna teks tautan */
    a {
      color: #FAF271; /* Ganti dengan warna yang diinginkan */
      text-decoration: none; /* Menghilangkan garis bawah */
    }
    p {
      color: #FAF271; /* Ganti dengan warna yang diinginkan */
      text-decoration: none; /* Menghilangkan garis bawah */
    }

    h1 {
      color: #FAF271; /* Ganti dengan warna yang diinginkan */
      text-decoration: none; /* Menghilangkan garis bawah */
    }
    h2 {
      color: #FAF271; /* Ganti dengan warna yang diinginkan */
      text-decoration: none; /* Menghilangkan garis bawah */
    }

    /* Untuk mengubah warna teks tautan saat dihover (opsional) */
    a:hover {
      color: #FAF271; /* Ganti dengan warna hover yang diinginkan */
    }
    </style>
    
</head>

<body>
    <div>
        <h1>&nbsp;</h1>
        <h2 align="center">FOR MORE INFORMATION</h2>
        <h2>
          <p align="center">CONTACT </p>
        </h2>
        <h2 align="center"></h2>
        <h2>
          <p align="center">CALL CENTER ABM</p>
          <p align="center">082388020323</p>
          <p align="center">____________________________________________________</p>
          <p align="center">UNTUK INFORMASI LEBIH LANJUT</p>
          <p align="center">WHATSAPP : 082388020323  </p>
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
            //$('#timer').text(seconds);
            if (seconds === 0) {
                clearInterval(timerInterval);
                // Timer has reached 0, you can perform additional actions here
                //alert('Timer has finished!');
                window.location.href = "<?php echo base_url();?>proses";
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
