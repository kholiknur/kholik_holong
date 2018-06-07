<?php
session_start();
if (empty($_SESSION['user']) OR empty($_SESSION['pass'])){
header("Location:index.php");
} else {

include  "koneksi.php";

$query = "select * from dokter";
$hasil = mysqli_query($koneksi, $query);

echo "Data rumah sakit : <br>";
echo "Tambah Data <br>";

while($data=mysqli_fetch_array($hasil)){
    echo "$data[id_dokter].   $data[nama_dokter].  $data[lokasi_praktek].  $data[jam_praktek].   $data[n0_rekam_medik] :: ";
    echo "Edit | Hapus <br>";
}

echo "<a href='logout.php'>Keluar</a><br>";
}

?>
