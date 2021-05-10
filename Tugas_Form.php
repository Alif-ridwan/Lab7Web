<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
 	 <title>Tugas PHP Dasar</title>
</head>
<body>
	<div class="login">
    <h1>Progam PHP sederhana</h1>
    <form method="post">
        <label>Nama : <br></label>
        <input type="text" name="nama" placeholder="Masukan nama">
        <br>
        <label>Tanggal Lahir : <br></label>
        <input type="date" name="tanggal">
        <br>
        <label>Pekerjaan : <br></label>
        <input type="radio" name="pekerjaan" value="Sopir">Sopir</input>
        <input type="radio" name="pekerjaan" value="Keamanan">Keamanan</input>
        <input type="radio" name="pekerjaan" value="Cleaning Service">Cleaning Service</input>
        <br>
        <br>
        <input type="submit" name="button" value="Submit">
        <br>
        <br>
        <h3>Hasil Outputnya : </h3>

    <?php
    $lahir = @$_GET['tanggal'];
    $button = @$_POST['button'];

    if ($button) {
        $nama=$_POST['nama'];
        $job=@$_POST['pekerjaan'];
        echo "<p>Nama : $nama</p>";
        $tanggal_lahir = new DateTime($_POST['tanggal']);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) { 
            $thn = "0";
            $bln = "0";
            $tgl = "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;
        echo "<p>Umur : ";
        echo $thn." Tahun ".$bln." Bulan ".$tgl." Hari";
         
        if ($job=='Sopir') {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 8.100.000/bulan</p>";
        }
        elseif ($job=="Keamana") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 5.125.000/bulan</p>";
        }
        elseif ($job=="Cleaning Service") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 10.200.000/bulan</p>";
        }
        else {
            echo "<p>Pilih pekerjaan</p>";
        }
    }
    ?>
    </form>
</body>
</html>