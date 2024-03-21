

<?php
$NAMA = 'NICKY FAJAELANI';
$KELAS =  'TI01';
$UMUR =  19;

echo ' Hallo Guys Nama Saya '. $NAMA .' Saya Dari Kelas '. $KELAS .' Umur Saya '. $UMUR . ' Tahun ';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tes PHP</title>
</head>
<body>
    <i class="bi bi-arrow-right-circle-fill"></i>
     <hr> <!--untuk menambakan garis  di antara isi HTML dan PHP -->

    <?php
    echo '<br>'. 'Hallo '. $NAMA .' Ketemu lagi di kelas ini, kamu dari kelas '. $KELAS . ' umur kamu saya tebak ' . $UMUR . ' kan ' ;
    ?>
</body>
</html>