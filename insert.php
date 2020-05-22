<?php
include ("koneksi.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $gambar = $_POST['gambar'];


    $query = "INSERT INTO tbl_laundry (nama,alamat,telepon,gambar) VALUES ('$nama','$alamat','$telepon','$gambar')";
    $exeQuery = mysqli_query($konek,$query);

    echo($exeQuery) ? json_encode(array(
        'kode' => 1,
        'pesan' => 'berhasil menambah data'))
        : json_encode(array('kode'=>2,'pesan'=>'gagal menambah data'));

}
else{
    echo json_encode(array('kode => 101','pesan' => "request anda salah"));
}
?>