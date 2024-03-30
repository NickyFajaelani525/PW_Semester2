<?php

    include 'koneksi.php';

    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];

    $query = "INSERT INTO siswaa (nama, nis, jurusan, kelas)
                VALUES ('$nama', '$nis', '$jurusan', '$kelas')";

     if ($conn->query($query) === TRUE ){
          header("location: index.php");
     }
     else{
         echo "Error: " . $query . "<br>" . $conn->error;
     }

     $conn->close();

     
?>