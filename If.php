<h1>Kondisi If</h1>
<?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
    echo "Minggu";
    } elseif ($nama_hari == "Monday") {
    echo "Senin";
    } else {
    echo "Selasa";
    }
?>
