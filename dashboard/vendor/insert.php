<?php
include "konek.php";

$nama = $_POST['namaweb'];
$kategori = $_POST['kategoriweb'];
$stok = $_POST['stokweb'];
$harga = $_POST['hargaweb'];
$tanggal = $_POST['tanggalweb'];
$uploader = $_POST['uploaderweb'];

// echo $nama.", ".$kategori.", ".$stok.", ".$harga.", ".$tanggal.", ".$uploader; 

$sql = "INSERT INTO tb_barang_masuk (NAMA_BARANG,KATEGORI_BARANG,STOK_BARANG,HARGA_BARANG_SATUAN,TANGGAL_MASUK,UPLOADER)VALUES('$nama','$kategori','$stok','$harga','$tanggal','$uploader')";
mysqli_query($kon, $sql);

header ("location:../index.php");
?>