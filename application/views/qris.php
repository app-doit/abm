<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer Kasir</title>

    <style>
        @media print {
            body {
                margin: 0;
            }

            @page {
                @page {
				size: 80mm 150mm; /* Ukuran kertas kustom (contoh: 80mm x 150mm) */
				margin: 5mm; /* Margin halaman */
}
                margin: 5mm; /* Margin halaman */
            }
        }
    </style>
	
	<style type="text/css">
	<!--
	.style1 {font-size: 36px}
	-->
	</style>

</head>
<body onLoad="printDocument();">

    <!-- Konten halaman Anda di sini -->
	<p align="center" class="style1">KIOS TUNAI</p>
	<p align="center"><img src="<?php echo base_url();?>/images/Qris.png" width="482" height="935"> </p>
	
    <script>
        // Kode JavaScript Anda di sini
        function printDocument() {
            window.print();
        }
    </script>

</body>
</html>
