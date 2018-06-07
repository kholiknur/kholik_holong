<?php

include "koneksi.php";

$id_dokter=$_POST['id_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$lokasi_praktek=$_POST['lokasi_praktek'];

mysqli_query($koneksi, "insert into dokter(id_dokter,nama_dokter,lokasi_praktek)         values('$id_dokter','$nama_dokter','$lokasi_praktek')");
header("Location:kelas1.php");
?>
