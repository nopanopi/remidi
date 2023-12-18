<?php
include "konek.php";

$nama = $_POST['namaweb'];
$kelas = $_POST['kelasweb'];
$jurusan = $_POST['jurusanweb'];
$alamat = $_POST['alamatweb'];
$jk = $_POST['jkweb'];

// echo $nama.", ".$kategori.", ".$stok.", ".$harga.", ".$tanggal.", ".$uploader; 

$sql = "INSERT INTO tb_siswa (NAMA,KELAS,JURUSAN,ALAMAT,JK)VALUES('$nama','$kelas','$jurusan','$alamat','$jk')";
mysqli_query($kon, $sql);

header ("location:../index.php");

$id = $_GET['id'];
$enama = $_POST['enamaweb'];
$ekelas = $_POST['ekelasweb'];
$ejurusan = $_POST['ejurusanweb'];
$ealamat = $_POST['ealamatweb'];
$ejk = $_POST['ejkweb'];

$edit = "UPDATE tb_siswa SET
NAMA='".$enama."', KELAS='".$ekelas."', JURUSAN='".$ejurusan."', ALAMAT='".$ealamat."', JK='".$ejk."' WHERE NO =".$id ; 

mysqli_query($kon, $edit);
header("location:../index.php")

?>