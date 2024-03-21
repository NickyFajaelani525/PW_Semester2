
<?php

        $title = 'praktikum 1 php';
        $nama = 'Nicky Fajaelani';
        $umur = 19 ;
        $hobbi = 'olahraga';

        // echo 'welcome '. $nama . ' dengan umur ' . $umur . ' hobbi ' .$hobbi;

        define( 'NAMA', $nama);
        define('UMUR', $umur );

        define('PHI', 3.14);
        $jari = 8;
        $keliling = 2 * PHI * $jari;
        $luas = PHI * $jari * $jari;

        // echo $keliling;
        // echo '<br>' . $luas; # menggunakan string atau tanda kutip untuk memasukan tag html


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome</h1>
    <h2> <?php echo $nama .' umur '. $umur.' judul '. $title ; ?></h2>
    <p> Luas Lingkaran : <?php echo $keliling ?> </p>
    <p>keliling luas : <?php echo $luas ?> </p>


</body>
</html>     




