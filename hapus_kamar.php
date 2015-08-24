<?php
	include 'connect.php';
	$id_kamar = $_GET['id_kamar'];
	
	
	$query = mysql_query("DELETE FROM jasa WHERE id_kamar = '$id_kamar'");
	
	if (!$query)
	{
		echo "<script>alert(' Hapus Data Gagal, ');window.location.href='data_jasa.php';</script>";
	}
	else
	{
		echo "<script>alert(' Hapus Data Berhasil , ');window.location.href='data_jasa.php';</script>";
	}
	
?>