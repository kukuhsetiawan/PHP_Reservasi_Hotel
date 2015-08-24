<?php
	include 'connect.php';
	$id_admin = $_POST['id_admin'];
	$id_jasa = $_POST['id_jasa'];
	$id_kamar = $_POST['id_kamar'];
	
	$id_jasa = $_POST['id_jasa'];
		$nama = $_POST['nama'];
	
	
	$query = mysql_query("UPDATE admin SET id_jasa = '$id_jasa',id_kamar = '$id_kamar',id_jasa = '$id_jasa',id_jasa = '$id_jasa',nama = '$nama' WHERE id_admin = '$id_admin'");
	
	if (!$query)
	{
		echo "<script>alert(' Ubah Data Gagal, ');window.location.href='data_admin.php';</script>";
	}
	else
	{
		echo "<script>alert(' Data Berhasil Di Tambahkan, ');window.location.href='data_admin.php';</script>";
	}
	
?>