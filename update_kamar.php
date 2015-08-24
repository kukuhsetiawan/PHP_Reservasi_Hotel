<?php
	include 'connect.php';
	$id_kamar = $_POST['id_kamar'];
	$id_tamu = $_POST['id_tamu'];
	$tipe_kamar = $_POST['tipe_kamar'];
	
	$tgl_checkin = $_POST['tgl_checkin'];
	$tgl_checkout = $_POST['tgl_checkout'];
	$harga = $_POST['harga'];
	
	
	$query = mysql_query("UPDATE jasa SET id_tamu = '$id_tamu',tipe_kamar = '$tipe_kamar',tgl_checkin = '$tgl_checkin',tgl_checkout = '$tgl_checkout',harga = '$harga' WHERE id_kamar = '$id_kamar'");
	
	if (!$query)
	{
		echo "<script>alert(' Ubah Data Gagal, ');window.location.href='data_kamar.php';</script>";
	}
	else
	{
		echo "<script>alert(' Data Berhasil Di Tambahkan, ');window.location.href='data_kamar.php';</script>";
	}
	
?>