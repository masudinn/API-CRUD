<?php
include ("koneksi.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $gambar = $_POST['gambar'];

	$query = "UPDATE tbl_laundry
	SET nama = '$nama',
	alamat = '$alamat',
	telepon = '$telepon',
    gambar = '$gambar'
	WHERE id='$id' ";

	$exeQuery = mysqli_query($konek, $query);

	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update'))
	:  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
}
else
{
	echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
}

?>