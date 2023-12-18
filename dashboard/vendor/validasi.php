<?php
include "konek.php"

$user = $_post["usernamediweb"];
$pass = $_post["pasworddiweb"];

// echo $user."nopa".$pass;
$sql = "SELECT * FROM tb_akun WHERE EMAIL LIKE '$user' AND PW LIKE '$pass'";
$cek = mysqli_query($kon, $sql);
$row = mysqli_fetch_assoc($cek);

if ($row['EMAIL'] === $user && $row['PW'] === $pass){
	header("location:../index.php")
}else{
	header("location:../login.php")
}
























 ?>