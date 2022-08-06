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
    <form action="read.php" method="">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" require><br>
        <label for="nim">Nim : </label>
        <input type="number" name="nim" require maxlength="10" minlength="3"><br>
        <label for="email">Email : </label>
        <input type="text" name="email"><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>