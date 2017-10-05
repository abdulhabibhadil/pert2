<?php //filename: matakuliah.php
// 1. koneksi
include("db.php");

// 2. query
$query = "SELECT * FROM matakuliah";
$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data matakuliah</h1>
<a href="template.php?page=formmatakuliah&action=add">Tambah Data</a>
<table border="1">
<thead>
	<tr>
		<th>id</th>
		<th>kode_mtk</th>
		<th>nama_mtk</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php
	while($row = mysqli_fetch_assoc($hasil)){
	?>
	<tr>
		<td><?php echo $row['id']; ?> </td>
		<td><?php echo $row['kode_mtk']; ?> </td>
		<td><?php echo $row['nama_mtk']; ?> </td>
		<td>
			<a href="template.php?page=formmatakuliah&id=<?php echo $row['id'];?>&action=edit">Edit</a>
			<a href="proses_mtk.php?action=delete&id=<?php echo $row['id'];?>">Delete</a>
		</td>
	</tr>
	<?php
	}
	?>
</tbody>
</table>