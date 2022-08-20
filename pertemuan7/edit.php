<?php  
require 'crud.php';
if (isset($_POST["submit"])) {
	if (edit($_POST) > 0 ) {
		echo"
        <script type='text/javascript'>
            alert('Data Berhasil Di edit');
            window.location.href = 'index.php';
        </script>";
        
	} else {
		echo "<script type='text/javascript'>alert('Data Gagal Di edit');</script>";	
	}
}
$id = $_GET['id'];
$data = query("SELECT * FROM mhs WHERE id_mhs = '$id'")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $id?>">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" value="<?= $data['nama_mhs']?>" required><br><br>
        <label for="nim">Nim : </label>
        <input type="number" name="nim" required value="<?= $data['nim']?>" maxlength="10" minlength="3"><br><br>
        <label for="nohp">Nomor Telpon : </label>
        <input type="number" name="nohp" value="<?= $data['no_hp']?>"  required maxlength="10" minlength="3"><br><br>
        <label for="email">Email : </label>
        <input type="text" name="email" value="<?= $data['email']?>" ><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>