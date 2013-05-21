<?php
	include "config.php";
?>
<!doctype HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap-ubuntu.css">
		<link rel="stylesheet" type="text/css" href="../css/page.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="../css/docs.css">
		<title>Sistem Absensi by Siska Ndut</title>
	</head>
	<body onload="showTime()">
		<div class="container">
			<header class="header">
				<h1>Isi absen disini (Banner)</h1>
			</header>
			<nav class="navbar">
				<div class="navbar-inner">
					<ul class="nav pull-right">
						<li><a class="clock"></a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hai, Admin
							<b class="caret"></b>
						</a>
							<ul class="dropdown-menu">
								<li><a href="#">Kelola User</a></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="container">
			<div class="row">
				<div class="span3 bs-docs-sidebar">
					<ul class="nav span3 nav-list bs-docs-sidenav">
						<li class="active">
							<a href="#">Data Guru
								<i class="icon-chevron-right"></i>
							</a>
						</li>
						<li>
							<a href="#">Jadwal Mengajar
								<i class="icon-chevron-right"></i>
							</a>
						</li>
						<li>
							<a href="#">Data Kelas
								<i class="icon-chevron-right"></i>
							</a>
						</li>
						<li>
							<a href="#">Absensi
								<i class="icon-chevron-right"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="span9">
					<table class="table table-stripped table-bordered table-hover">
							<colgroup style="width:10%"></colgroup>
							<colgroup style="width:30%"></colgroup>
							<colgroup style="width:10%"></colgroup>
							<colgroup style="width:30%"></colgroup>
							<colgroup style="width:20%"></colgroup>
						<tr>
							<th>NIP</th>
							<th>Nama</th>
							<th>Pangkat</th>
							<th>Telepon</th>
							<th>Action</th>
						</tr>
						<?php 
							$table=mysql_query("SELECT * FROM s_data_guru ORDER BY t_nama ASC");
							while ($array=mysql_fetch_array($table)) {
								echo "
									<tr>
										<td>$array[t_nip]</td>
										<td>$array[t_nama]</td>
										<td>$array[t_pangkat]</td>
										<td>$array[t_mobile]</td>
										<td>
											<a href=\"lihat_guru.php?nip=$array[t_nip]\" class=\"btn btn-small btn-success action\" rel=\"tooltip\" title=\"Lihat / Edit\"><i class=\"icon-eye-open\"></i></a>
											<a href=\"#\" class=\"btn btn-small btn-danger action\" rel=\"tooltip\" title=\"Hapus\"><i class=\"icon-trash\"></i></a>
										</td>
									</tr>
								";
							}
						?>
					</table>
				</div>
			</div>
		</div>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/holder.js"></script>
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
		$(".clock").text(hari[d]+" "+h+":"+m+":"+s);
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
		$('.action').tooltip();
	</script>
	</body>
</html>