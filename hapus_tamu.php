<?php
	include 'connect.php';
	$id_tamu = $_GET['id_tamu'];
	
	
	$query = mysql_query("DELETE FROM tamu WHERE id_tamu = '$id_tamu'");
	
	if (!$query)
	{
		echo "<script>alert(' Hapus Data Gagal, ');window.location.href='data_tamu.php';</script>";
	}
	else
	{
		echo "<script>alert(' Hapus Data Berhasil , ');window.location.href='data_tamu.php';</script>";
	}
	
?>