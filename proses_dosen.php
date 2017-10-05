<?php //filename: proses_dosen.php

include("db.php");

if($_GET['action'] == "add"){
	// 2. Query
	$query  = "INSERT INTO dosen (id, kode_dosen, nama)
				VALUES('$_POST[id]','$_POST[kode_dosen]','$_POST[nama]')";
}else if($_GET['action'] == "edit"){
	// 2. Query
	$query = "UPDATE dosen
			SET id = '$_POST[id]'
				kode_dosen = '$_POST[kode_dosen]'
				nama = '$_POST[nama]'
				WHERE id = $_POST[id]";
}else if($_GET['action'] == "delete"){
	$query = "DELETE FROM dosen
				WHERE id=$_GET[id]";
}

mysqli_query($koneksi, $query);

// REDIRECT ke template.php
header('location: template.php?page=dosen');