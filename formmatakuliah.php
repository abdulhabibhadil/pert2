<?php
if($_GET['action'] == "edit"){
	echo "<h1>Edit matakuliah</h1>";
	include("db.php");
	$query = "SELECT * FROM matakuliah
			  WHERE id = $_GET[id]";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
}else{
	echo "<h1>Add matakuliah</h1>";
	$row['id'] = "";
	$row['kode_mtk'] = "";
	$row['nama_mtk'] = "";
}
?>
<form action="proses_mtk.php?action=<?php echo $_GET['action']; ?>" method="post">
	id
	<input type="text" name="id" value="<?php echo $row['id']; ?>" />
	<br />
	kode_mtk:
	<input type="text" name="kode_mtk" value="<?php echo $row['kode_mtk']; ?>" />
	<br />
	nama_mtk:
	<input type="text" name="nama_mtk" value="<?php echo $row['nama_mtk']; ?>" />
	<br />
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
</form>