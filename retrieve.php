<?php
require("koneksi.php");
$perintah = "SELECT * FROM tbl_laundry";
$eksekusi = mysqli_query($konek,$perintah);
$cek = mysqli_affected_rows($konek);

if($cek > 0){
    $response["kode"] = 1;
    $response["pesan"] = "data tersedia";
    $response["data"] = array();

    while($ambil = mysqli_fetch_object($eksekusi)){
        $F["id"] = $ambil->id;
        $F["nama"] = $ambil->nama;
        $F["alamat"] = $ambil->alamat;
        $F["telepon"] = $ambil->telepon;
        $F["Foto"] = $ambil->Foto;

        array_push($response["data"],$F);
    }
}else{
    $response["kode"]=0;
    $response["pesan"]="data tidak tersedia";
}

echo json_encode($response);
mysqli_close($konek);