<html>
<head><title>Edit Data</title></head>
<body>
<?php
session_start();
if (empty($_SESSION['user']) OR empty($_SESSION['pass'])){
header("Location:index.php");
} else {

    include "koneksi.php";
    $id=$_GET['id'];
    $data=mysqli_query($koneksi, "select * from dokter where id_dokter='$id'");
    $d=mysqli_fetch_array($data);
	
}
?>
<h2>Edit Data</h2>
<form method="post" action="editproses.php">
	<table>
		<tr><td>nama dokter	</td><td><input type="text"  name="nama_dokter" value="<?=$d['nama_dokter']?>"</td></tr>
		<tr><td>lokasi praktek	</td><td><input type="text"  name=
		"lokasi_praktek"	value="<?=$d['lokasi_praktek']?>"></td></tr>
		<tr><td>id_dokter	</td><td><input type="text" name= 
		"id_dokter" disabled value="<?=$d['id_dokter']?>"></td></tr>
		<tr><td></td>
		<td><input type="submit" value="Edit"> 
		<a href="kelas1.php">Batal</a>
		</td></tr>
	</table>
</form>
</body>
</html>