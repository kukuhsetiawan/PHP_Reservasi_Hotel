<?php
	include 'connect.php';
	$id_tamu = $_POST['id_tamu'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	$telp = $_POST['telp'];
	
	
	$query = mysql_query("UPDATE tamu SET nama = '$nama',alamat = '$alamat',telp = '$telp' WHERE id_tamu = '$id_tamu'");
	
	if (!$query)
	{
		echo "<script>alert(' Ubah Data Gagal, ');window.location.href='data_tamu.php';</script>";
	}
	else
	{
		echo "<script>alert(' Data Berhasil Di Tambahkan, ');window.location.href='data_tamu.php';</script>";
	}
	
?>