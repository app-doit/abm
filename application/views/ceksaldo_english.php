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
  .flex-end {
    display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: end;
  }
   </style>
</head>

<body>
<p>&nbsp;</p>
    <p align="center"><h1>YOUR ACCOUNT BALNACE</h1></p>
    <p align="center" class="style3">RP 1.000.000</p>
    <p align="center" class="style3">DO YOU WANT MAKE ANOTHER TRANSACTION ?</p>
   <div class="flex-end">
       <p class="style3"><a href=""></a>Yes - - ></p>
       <p class="style3"><a href=""></a>No - - ></p>

   </div>
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
