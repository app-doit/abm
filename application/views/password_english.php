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
	     <style>
    /* Mengubah warna teks tautan */
    a {
      color: #FFFF00; /* Ganti dengan warna yang diinginkan */
      text-decoration: none; /* Menghilangkan garis bawah */
    }

    /* Untuk mengubah warna teks tautan saat dihover (opsional) */
    a:hover {
      color: #FFFF00; /* Ganti dengan warna hover yang diinginkan */
    }
  .style3 {font-size: xx-large}
         .style4 {font-size: 66px}
         .style5 {font-size: 66px}
         </style>
</head>

<body>
<p>&nbsp;</p>
    <h1 class="style4">PLEASE ENTER YOUR PIN </h1></p>
    <p align="center" class="style4">PRESS CANCEL TO VOID TRANSACTION</p>
    <p align="center" class="style4">--------------</p>
    <p align="right" class="style3">&nbsp;</p>
    <p align="right" class="style3"><a href="<?php echo base_url();?>pilihnominal_english" class="style5" style="text-decoration: none;">NEXT</a></p>
    <p>
      <script>

    </script>
</p>
    <p>&nbsp;    </p>
</body>
<script>
 document.addEventListener("keypress", function(event) {
            if(event.key == "*"){
				goBack();
			}
            // Lakukan sesuatu dengan event.key jika diperlukan
        });
		
function goBack() {
	window.history.back();
}
</script>
</html>
