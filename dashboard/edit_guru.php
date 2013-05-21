<?php
include "config.php";
$t_nip= $_POST['t_nip'];
$t_nama= $_POST['t_nama'];
/* $tempat= $_POST['tempat'];
$waktu= $_POST['waktu'];
$isi= $_POST['isi'];
$id = $_POST['id']; */

if(trim($t_nip=='')){
	echo "NIP";}
/*elseif(trim($tgl=='')){
	echo "Isikan tgl";}
	elseif(trim($tgl_acara=='')){
	echo "Isikan tgl acara";}
	elseif(trim($tempat=='')){
	echo "Isikan tempat";}
	elseif(trim($waktu=='')){
	echo "Isikan waktu";} */
	
/*	elseif(trim($t_nama=='')){
	echo "Nama";}
	
	else{
	$input = mysql_query("UPDATE s_data_guru set 
	t_nim='$t_nim',
	t_nama='$t_nama', 
	tgl_acara='$tgl_acara',
	tempat='$tempat',
	waktu='$waktu',
	
	isi='$isi', */
	where t_nip='$t_nip'");
	echo '<meta http-equiv=\'refresh\'content=\'0;url= lihat_guru.php\'>';
	}
?>	
