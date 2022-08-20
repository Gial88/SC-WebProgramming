<?php  
require 'crud.php';
if (isset($_POST["submit"])) {
	if (tambah($_POST) > 0 ) {
		echo"
        <script type='text/javascript'>
            alert('Data Berhasil Di Tambah');
            window.location.href = 'index.php';
        </script>";
        
	} else {
		echo "<script type='text/javascript'>alert('Data Gagal Di Tambah');</script>";	
	}
}
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
        <label for="nama">Nama : </label>
        <input type="text" name="nama" required><br><br>
        <label for="nim">Nim : </label>
        <input type="number" name="nim" required maxlength="10" minlength="3"><br><br>
        <label for="nohp">Nomor Telpon : </label>
        <input type="number" name="nohp" required maxlength="10" minlength="3"><br><br>
        <label for="email">Email : </label>
        <input type="text" name="email"><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>