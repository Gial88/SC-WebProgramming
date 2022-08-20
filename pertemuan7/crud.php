<?php 
$conn = mysqli_connect('localhost','root','','mahasiswa');

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
		$rows = [];
	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}
	return $rows;
}

function tambah($data){
    global $conn;

    $nama = $data["nama"];
    $nim = $data["nim"];
    $nohp = $data["nohp"];
    $email = $data["email"];

    $query = "INSERT INTO mhs VALUES ('','$nama','$nim','$nohp','$email')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data['id'];
    $nama = $data["nama"];
    $nim = $data["nim"];
    $nohp = $data["nohp"];
    $email = $data["email"];

    $query = "UPDATE mhs SET 
                nama_mhs = '$nama', nim = '$nim', no_hp = '$nohp', email = '$email' 
                WHERE id_mhs = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    $query = "DELETE FROM mhs WHERE id_mhs = '$id'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>