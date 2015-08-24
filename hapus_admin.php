<?php
	include 'connect.php';
	$id_admin = $_GET['id_admin'];
	
	
	$query = mysql_query("DELETE FROM admin WHERE id_admin = '$id_admin'");
	
	if (!$query)
	{
		echo "<script>alert(' Hapus Data Gagal, ');window.location.href='data_admin.php';</script>";
	}
	else
	{
		echo "<script>alert(' Hapus Data Berhasil , ');window.location.href='data_admin.php';</script>";
	}
	
?>