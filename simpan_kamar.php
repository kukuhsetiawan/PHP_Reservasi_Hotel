<?php
	include 'connect.php';
	$id_kamar = $_POST['id_kamar'];
	$id_tamu= $_POST['id_tamu'];
	$tipe_kamar = $_POST['tipe_kamar'];
	
	$tgl_checkin = $_POST['tgl_checkin'];
	$tgl_checkout = $_POST['tgl_checkout'];
	$harga = $_POST['harga'];
	
	
	$query = mysql_query("Insert into kamar values('$id_kamar','$id_tamu','$tipe_kamar','$tgl_checkin','$tgl_checkout','$harga')");
	
	if (!$query)
	{
		echo "<script>alert(' Data Gagal Di Tambahkan, ');window.location.href=' tambah_kamar.php';</script>";
	}
	else
	{
		echo "<script>alert(' Data Berhasil Di Tambahkan, ');window.location.href='data_kamar.php';</script>";
	}
	
?>