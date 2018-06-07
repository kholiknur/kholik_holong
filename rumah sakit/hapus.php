<?php

include "koneksi.php";

$id=$_GET['id'];

mysqli_query($koneksi, "delete from dokter where id_dokter='$id'");
header("Location:kelas1.php");

?>
