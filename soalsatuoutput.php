<html>
<title>Konser Nasyid Indonesia</title>
<h2 style="padding-left: 100px;">KONSER NASYID INDONESIA</h2>

<body>
    <form action="soalsatuinput.php" method="POST">
        <?php

        $nama = $_POST['nama'];

        $artis = $_POST['artis'];
        $duduk = $_POST['duduk'];
        $jumlah = $_POST['jumlah'];


        if ($artis == "Raihan") {
            $studio = "Studio 1";
        } else if ($artis == "Snada") {
            $studio = "Studio 2";
        }

        if ($duduk == "VIP") {
            $harga = 500000;
        } else if ($duduk == "Festival") {
            $harga = 250000;
        }
        $totalharga = $jumlah * $harga;


        $totalbayar = $totalharga;

        ?>

        <pre>
===============================================================================
<br>
Nama Pemesanan   : <?php echo $nama; ?> 

Kode Studio      : <?php echo $studio; ?> <br>
Bintang Tamu     : <?php echo $artis; ?> 

Jenis Kelas      : <?php echo $duduk; ?> <br>
Harga            : <?php echo "Rp." . number_format($harga); ?> <br>
Jumlah Beli      : <?php echo $jumlah; ?> <br>

===============================================================================
Total Harga      : <?php echo "Rp." . Number_format($totalbayar); ?> 
===============================================================================

<input type="submit" value="INPUT DATA LAGI"> </input>

</body>
</html>