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
    .style2 {font-size: 66px; }
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
         </style>
</head>

<body>
    <div>
        <h1>&nbsp;</h1>
        <h1 align="center" class="style2">WITHDRAW </h1>
        <h2>
      
        </h2>
        <h2 align="center"></h2>
        <table width="100%" border="0" cellpadding="20" cellspacing="1">
          <tr>
            <td height="81">&nbsp;</td>
            <td>&nbsp;</td>
            <td><div align="right"><span class="style2"><a href="<?php echo base_url();?>ewallet_english">E-WALLET</a></span></div></td>
          </tr>
          <tr>
            <td height="81">&nbsp;</td>
            <td>&nbsp;</td>
            <td><div align="right" class="style2"><a href="<?php echo base_url();?>password_english">SAVINGS</a></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><div align="right" class="style2"></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <h2>        </h2>
        <h2>&nbsp;</h2>
        <!-- Isi halaman ATM disini -->
    </div>
<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    


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
</body>

</html>
