<?php
	include 'connect.php';
	$id_tamu = $_POST['id_tamu'];
	$nama= $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	$tlp = $_POST['tlp'];
	
	
	$query = mysql_query("Insert into tamu values('$id_tamu','$nama','$alamat','$tlp')");
	
	if (!$query)
	{
		echo "<script>alert(' Data Gagal Di Tambahkan, ');window.location.href=' tambah_tamu.php';</script>";
	}
	else
	{
		echo "<script>alert(' Data Berhasil Di Tambahkan, ');window.location.href='data_tamu.php';</script>";
	}
	
?>