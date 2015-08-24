<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "hotel";
	
	$koneksi = mysql_connect($server,$username,$password) or die ("Tidak bisa terhubung ke MySQL: ".mysql_error());
	mysql_select_db($database,$koneksi) or die ("Tidak bisa terhubung ke database ". mysql_error());
?>