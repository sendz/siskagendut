<!doctype HTML>
<?php include "dashboard/config.php"; ?>
<?php
error_reporting(0);
session_start();
$l_user=$_POST['username'];
$l_pass=md5($_POST['password']);

$table=mysql_query("SELECT * FROM s_user WHERE t_user_name='$l_user' AND t_user_pass='$l_pass'");
$array=mysql_fetch_array($table);
$t_user=$array['t_user_name'];
$t_pass=$array['t_user_pass'];
$t_role=$array['t_user_role'];

if ($l_user==$t_user&&$l_pass==$t_pass) {
	session_register("username");
	session_register("role");

	$_SESSION['username']=$t_user;
	$_SESSION['role']=$t_role;

	if ($_SESSION['role']=="administrator") {
		header('location:dashboard/index.php');
	}
} else {
	echo "silakan login";
	die();
}

?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-ubuntu.css">
		<link rel="stylesheet" type="text/css" href="css/page.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<title>Sistem Absensi by Siska Ndut</title>
	</head>
	<body onload="showTime()">
		<div class="container">
			<header class="header">
				<h1>Isi absen disini (Banner)</h1>
			</header>
			<nav class="navbar">
				<div class="navbar-inner">
					<ul class="nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="#">Jadwal</a></li>
						<li><a href="#">Lain-lain</a></li>
					</ul>
					<ul class="nav pull-right">
						<li><a id="clock"></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="container">
			<div class="row">
				<div class="span3">
					<img src="js/holder.js/180x240">
				</div>
				<div class="span9">
					<?php
						$nama = $_POST["username"];
						$time = $_POST["time"];
						echo("Nama: $nama");
					?>
					<!-- kasih timeout 5 sampai 10 detik, lalu logout -->
					<!-- Kalau klik OK, langsung logout -->
					<p>
					<a href="logout.php" class="btn btn-primary btn-large">Selesai</a>
					</p>
				</div>
			</div>
		</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/holder.js"></script>
	<script type="text/javascript">
		$('#myCarousel').carousel({
			interval:5000
		})
		// Jam
		function showTime()
		{
			var today=new Date();
			var d=today.getDay();
			var h=today.getHours();
			var m=today.getMinutes();
			var s=today.getSeconds();
			// Declare day
			var hari=new Array(7);
			hari[0]="Minggu";
			hari[1]="Senin";
			hari[2]="Selasa";
			hari[3]="Rabu";
			hari[4]="Kamis";
			hari[5]="Jum'at";
			hari[6]="Sabtu";
			// add a zero in front of numbers<10
			h=checkTime(h);
			m=checkTime(m);
			s=checkTime(s);
		$("#clock").text(hari[d]+" "+h+":"+m+":"+s);
		t=setTimeout('showTime()',1000);
		}
		function checkTime(i)
		{
		if (i<10)
		  {
		  i="0" + i;
		  }
		return i;
		}
	</script>
	</body>
</html>