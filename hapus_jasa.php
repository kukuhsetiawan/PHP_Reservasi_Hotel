<?php
	include 'connect.php';
	$id_jasa = $_GET['id_jasa'];
	
	
	$query = mysql_query("DELETE FROM jasa WHERE id_jasa = '$id_jasa'");
	
	if (!$query)
	{
		echo "<script>alert(' Hapus Data Gagal, ');window.location.href='data_jasa.php';</script>";
	}
	else
	{
		echo "<script>alert(' Hapus Data Berhasil , ');window.location.href='data_jasa.php';</script>";
	}
	
?>