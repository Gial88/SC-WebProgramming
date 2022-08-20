<?php
require'crud.php';
$data = query("SELECT * FROM mhs");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="tambah.php">Tambah Data</a>
    <table border="1px">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Nomor Telpom</th>
            <th>Email Mahasiswa</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1;?>
        <?php foreach ($data as $user ):?> 
        <tr>
            <td><?= $no?></td>
            <td><?= $user['nama_mhs'];?></td>
            <td><?= $user['nim'];?></td>
            <td><?= $user['no_hp'];?></td>
            <td><?= $user['email'];?></td>
            <td><a href="edit.php?id=<?= $user['id_mhs'];?>">Edit</a> | <a href="hapus.php?id=<?= $user['id_mhs'];?>" onclick="return confirm('Apakah Data Ingin Di Hapus ?');">Hapus</a> </td>
        </tr>
        <?php $no++;?>
        <?php endforeach;?>
    </table>
</body>
</html>