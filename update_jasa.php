<?php
	include 'connect.php';
	$id_jasa = $_POST['id_jasa'];
	$id_tamu = $_POST['id_tamu'];
	$nama_jasa = $_POST['nama_jasa'];
	
	$harga_jasa = $_POST['harga_jasa'];
	
	
	$query = mysql_query("UPDATE jasa SET id_tamu = '$id_tamu',nama_jasa = '$nama_jasa',harga_jasa = '$harga_jasa' WHERE id_jasa = '$id_jasa'");
	
	if (!$query)
	{
		echo "<script>alert(' Ubah Data Gagal, ');window.location.href='data_jasa.php';</script>";
	}
	else
	{
		echo "<script>alert(' Data Berhasil Di Tambahkan, ');window.location.href='data_jasa.php';</script>";
	}
	
?>