<?php
	include 'connect.php';
	$id_jasa = $_POST['id_jasa'];
	$id_tamu= $_POST['id_tamu'];
	$nama_jasa = $_POST['nama_jasa'];
	
	$harga_jasa = $_POST['harga_jasa'];
	
	
	$query = mysql_query("Insert into jasa values('$id_jasa','$id_tamu','$nama_jasa','$harga_jasa')");
	
	if (!$query)
	{
		echo "<script>alert(' Data Gagal Di Tambahkan, ');window.location.href=' tambah_jasa.php';</script>";
	}
	else
	{
		echo "<script>alert(' Data Berhasil Di Tambahkan, ');window.location.href='data_jasa.php';</script>";
	}
	
?>