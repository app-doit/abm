<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ABM Page</title>
    <style>
      body {
        background-color: #003366; /* Warna biru mesin ATM */
        color: white; /* Warna teks putih untuk kontras */
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
		color: #FFFF00;
		font-size: 56px;
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
      .flex-nominal {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 1rem;
      }
      .flex-col {
        display: flex;
        flex-direction: column;
      }

    .style4 {font-size: 36px}
	.ratakanan{
		text-align: right;
	}
    </style>
  </head>

  <body>
    <p align="center">PILIH NOMINAL</p>
    <p align="center" class="style4">TEKAN CANCEL UNTUK MEMBATALKAN TRANSAKSI</p>
    <div class="flex-nominal">
      <div class="flex-col">
      Rp 50.000<br>&nbsp;<br>
      Rp 100.000<br>&nbsp;<br>
      Rp 200.000<br>&nbsp;<br>
      Rp 300.000<br>&nbsp;<br>
      SETOR TUNAI
      </div>
      <div class="flex-col ratakanan">
        Rp 500.000<br>&nbsp;<br>
        Rp 1.000.000<br>&nbsp;<br>
        Rp 1.500.000<br>&nbsp;<br>
        JUMLAH LAIN<br>&nbsp;<br>
        MENU LAINNYA
      </div>
    </div>
    <p>
      <script></script>
    </p>
    <p>&nbsp;</p>
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
