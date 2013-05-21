<?php
include"config.php";
				 
 $t_nip=$_POST['t_nip'];
 $t_nama=$_POST['t_nama'];
 $t_tempatlahir=$_POST['t_tempatlahir'];
 $t_tanggal_lahir=$_POST['t_tanggal_lahir'];
 $t_pendidikan_terakhir=$_POST['t_pendidikan_terakhir'];
 $t_alamat=$_POST['t_alamat'];
 $t_telepon=$_POST['t_telepon'];
 $t_mobile=$_POST['t_mobile'];
 $t_photo_guru=$_POST['t_photo_guru'];
 $lokasi_file      = $_FILES['fupload']['tmp_name'];
$nama_file        = $_FILES['fupload']['name'];
$ukuran_file	  = $_FILES['fupload']['size'];
$direktori 	      = "ok/$nama_file";

 $query=mysql_query("INSERT INTO iklan_gratis(catid,title,content,website,tags,image,name,email,city,phone)
		VALUES ('$catid','ii','$content','$website','$tags','ok','$name','$email','$city','$phone')");
		echo "<script>alert('Berhasil Input'); </script>";
if (move_uploaded_file($lokasi_file,"$direktori")){
	echo("<img src=\"ok/$nama_file\" border=0 width=330 height=235><br>");
 
        }
        ?>