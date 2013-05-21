<?php
	error_reporting(0);
	$connection=mysql_connect("localhost","root","");
	/*
	if(!$connection){
		die("Database Server Modar, Kusabab:", . mysql_error());
	}
	*/
	$db=mysql_select_db("r_absen",$connection);

	// Konfigurasi Tanggal

	$date=date("d-m-Y");
	$time=time("H:i:s");
?>