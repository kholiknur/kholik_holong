<?php
session_start();
if (empty($_SESSION['user']) OR empty($_SESSION['pass'])){
header("Location:index.php");
} else {

include   "koneksi.php";

$query = "select * from dokter";
$hasil = mysqli_query($koneksi, $query);

echo "Data rumah sakit : <br>";
echo "<a href='tambah.php'>Tambah Data</a> <br>";

echo "<table>
<tr>
<th>id dokter</th>
<th>Nama dokter</th>
<th>lokasi praktek</th>
<th>Action</th>
</tr>";

while($data=mysqli_fetch_array($hasil))
	{
	echo "
<tr>
<td align='center'>$data[id_dokter].</td>
<td align='center'>$data[nama_dokter]. 
<td align='center'>$data[lokasi_praktek]</td>
<td align='center'><a href='edit.php?id=$data[id_dokter]'>Edit</a> |
	<a href='hapus.php?id=$data[id_dokter]'>Hapus<a/> <br>
</td>

</tr>";
		
/**    echo "$data[id_dokter].  $data[nama_dokter]   $data[lokasi_praktek] :: ";
    echo "<a href='edit.php?id=$data[id_dokter]'>Edit</a> |
	<a href='hapus.php?id=$data[id_dokter]'>Hapus<a/> <br>";
**/	}
	echo '</table>';

	echo "<a href='logout.php'>Keluar</a><br>";
}

?>
