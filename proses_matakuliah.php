<?php //filename: proses_mtk.php

include("db.php");

if($_GET['action'] == "add"){
	// 2. Query
	$query  = "INSERT INTO matakuliah (id, kode_mtk,nama_mtk)
				VALUES('$_POST[id]','$_POST[kode_mtk]','$_POST[nama_mtk]')";
}else if($_GET['action'] == "edit"){
	// 2. Query
	$query = "UPDATE matakuliah
			SET id = '$_POST[id]'
				kode_mtk = '$_POST[kode_mtk]'
				nama_mtk = '$_POST[nama_mtk]'
				WHERE id = $_POST[id]";
}else if($_GET['action'] == "delete"){
	$query = "DELETE FROM matakuliah
				WHERE id=$_GET[id]";
}

mysqli_query($koneksi, $query);

// REDIRECT ke template.php
header('location: template.php?page=matakuliah');