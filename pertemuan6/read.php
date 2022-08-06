<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Read</title>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $email = $_POST['email'];
            echo "Nama : $nama <br>";
            echo "Nim : $nim <br>";
            echo "Email : $email <br>";
        } else{
            echo "Form belum diisi";
        }
    ?>
</body>
</html>