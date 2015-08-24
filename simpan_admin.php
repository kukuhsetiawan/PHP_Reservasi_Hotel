<?php
	include 'connect.php';
	$id_admin = $_POST['id_admin'];
	$id_jasa = $_POST['id_jasa'];
	$id_kamar = $_POST['id_kamar'];
	
	$id_tamu = $_POST['id_tamu'];
	$nama = $_POST['nama'];
	
	
	$query = mysql_query("Insert into admin values('$id_admin','$id_jasa','$id_kamar','$id_tamu','$nama')");
	
	if (!$query)
	{
		echo "<script>alert(' Data Gagal Di Tambahkan, ');window.location.href=' tambah_admin.php';</script>";
	}
	else
	{
		echo "<script>alert(' Data Berhasil Di Tambahkan, ');window.location.href='data_admin.php';</script>";
	}
	
?>