<?php

include "koneksi.php";

$id=$_POST['id'];
$nama_dokter=$_POST['nama_dokter'];
$lokasi_praktek=$_POST['lokasi_praktek'];

mysqli_query($koneksi, "update rumah sakit set nama_dokter = '$nama_dokter',
lokasi_praktek = '$lokasi_praktek' where id_dokter = '$id'");

header("Location:kelas1.php");

?>
