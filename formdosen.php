<?php
if($_GET['action'] == "edit"){
	echo "<h1>Edit dosen</h1>";
	include("db.php");
	$query = "SELECT * FROM dosen
			  WHERE id = $_GET[id]";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
}else{
	echo "<h1>Add Dosen</h1>";
	$row['id'] = "";
	$row['kode_dosen'] = "";
	$row['nama'] = "";
}
?>
<form action="proses_dosen.php?action=<?php echo $_GET['action']; ?>" method="post">
	id:
	<input type="text" name="id" value="<?php echo $row['id']; ?>" />
	<br />
	kode_dosen:
	<input type="text" name="kode_dosen" value="<?php echo $row['kode_dosen']; ?>" />
	<br />
	nama:
	<input type="text" name="nama" value="<?php echo $row['nama']; ?>" />
	<br />
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
</form>