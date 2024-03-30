<?php

    include 'koneksi.php';

    //menunjukan data
    $query = "SELECT * FROM siswaa";
    $result = $conn->query($query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Nama Anggota Osis SMK Insan Madani Bogor (2021/2022)</h2>
    <table border="1" style="width:100%">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <!-- menampilkan data dari database -->
        <?php while  ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?=$row['id'] ?></td>
                <td><?=$row['nama'] ?></td>
                <td><?=$row['nis'] ?></td>
                <td><?=$row['jurusan'] ?></td>
                <td><?=$row['kelas'] ?></td>

                <td>
                    <a href="edit.phpid=; ?>">Edit</a>
                    <a href="delete.php?id=; ?>">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
    </table>
    <!-- tombol tambah anggota -->
    <br>
    <br>
    <h2>Tambah Siswa</h2>
    <form action="masuk.php" method="POST">
       Nama :  <input type="text" name="nama" required><br>
       NISN :  <input type="text" name="nis" required><br>
       Jurusan  :
                <select name="jurusan">
                    <option value="OTKP">Otomatisasi Tata Kelola Perkantoran(OTKP)</option>
                    <option value="IPA">Ilmu Pengetahuan Alam(IPA)</option>
                </select><br>
        Kelas : 
                <select name="kelas">
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
        <input type="submit" value="Simpan"><br>
    </form>
</body>
</html>