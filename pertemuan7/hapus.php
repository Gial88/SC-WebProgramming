<?php  
require 'crud.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
		echo "
        <script>
            alert('Data Berhasil Di Hapus');
            window.location.href = 'index.php';
        </script>";
	} else {
		echo "
        <script>
            alert('Data Gagal Di Hapus');
        </script>";	

}

?>