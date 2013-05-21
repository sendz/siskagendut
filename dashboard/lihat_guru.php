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
			<?php
				$table=mysql_query("SELECT * FROM s_data_guru where t_nip=$_GET[nip]");
				$array=mysql_fetch_array($table);
			?>
			<div class="row">
				<div class="span3">
					<div class="hero-unit photo">
						<img src="<?php echo "$array[t_photo_guru]";?>">
					</div>
				</div>
				<div class="span9 tabel">
					<button class="btn btn-warning pull-right" id="editbutton" style="margin-bottom:10px;">Ubah</button>
					<div class="clearfix"></div>
					<form method="post" action="do_edit.php?type=guru&id=<?php echo "$array[t_nip]"; ?>">
					<table class="table table-stripped table-bordered">
						<colgroup style="width:20%;"></colgroup>
						<colgroup style="width:80%;"></colgroup>
						<tr>
							<th>NIP</th>
							<td><input type="text" name="t_nip" id="nip" class="aktif" value="<?php echo "$array[t_nip]"; ?>" readonly /></td>
						</tr>
						<tr>
							<th>Nama</th>
							<td><input type="text" name="t_nama" id="nama" class="aktif" id="aktif" value="<?php echo "$array[t_nama]"; ?>" readonly="false" /></td>
						</tr>
					</table>
					<input type="submit" value="Simpan" id="savebutton" class="btn btn-primary aktif" style="display:none;" />
					<form method="post" action="edit_guru.php?type=id=<?php echo "$array[t_nip]"; ?>">
					</form>
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
		// Edit Button
		$('#editbutton').click(function(){
			$('.aktif').removeAttr('readonly');
			$('#savebutton').toggle();
		});

	</script>
	</body>
</html>