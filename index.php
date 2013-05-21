<!doctype HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-ubuntu.css">
		<link rel="stylesheet" type="text/css" href="css/page.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<title>Sistem Absensi  SMK Negeri 2 Banjar  </title>
	</head>
	<body onload="showTime()">
		<div class="container">
			<header class="header">
				<h1>Sistem Absensi <br> SMK Negeri 2 Banjar </br> </h1>
			</header>
			<nav class="navbar">
				<div class="navbar-inner">
					<ul class="nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="#">Jadwal</a></li>
						<li><a href="#">Lain-lain</a></li>
					</ul>
					<ul class="nav pull-right">
						<li><a class="clock"></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="container">
			<div class="row">
				<div class="span12">
					<div id="myCarousel" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<h2>Judul Artikel 1</h2>
							<p>Panjang pejah sapih rah manah nyipeng dhadha yatra. Lawas; angge jawah kakang paidon kula toya dipun awis, inggil gesang jawah naleni: peksi medal; bucal luh. Bebed sarem rambut manah bangkekan manak dipun pendhet, rumput. Jaler rambut balung motong nanem kula nanem rumput manah sapih dandos pupur swanten semah suku, kangge? Minggat wilujeng leres, "maos: tiapukan kirangan sirah: toya mejahi manah."</p>
							<a href="#" class="btn btn-info">Selengkapnya</a>
						</div>
						<div class="item">
							<h2>Judul Artikel 2</h2>
							<p>Wanci, dhateng tapihan nanem cucul nedhi gesang imbuh mlampah. Gendhis ageng supe tumpak taken lenggah crios toya dhawah sekar tileman sarem, tuwuh ngadeg dipun awis. Latu mangga tumpak bidal: ron ijem sinjang pamanah, kinten, "tangsul supe nyukani bebed epek-epek tuwi, griya ageng payung cepeng ngadeg." Cepeng tuwi tanem brengos ngiringaken sarem mirengake cawis tangan iket, kaget, wilujeng kaget toya, bokong: cukur! Ajrih gujeng tilem, "wicanten segawon bangkekan emah-emah cucul leres, cewok," tanem dados tuwi wawarat. Panjang balung kula gegriya menda jampi sima.</p>
							<a href="#" class="btn btn-info">Selengkapnya</a>
						</div>
						<div class="item">
							<h2>Judul Artikel 3</h2>
							<p>Umur, bojo kuping tilem tumut kinten dipun entosi kesah griya gesang tilem purun mular jaler naleni nyrengeni weteng awon cengel? Ijem andhapan. Surya nanem manah radinan, "epek-epek, maos wana pejah nedha wawarat, ajeng ngangge kirangan toya sawer," ngangge. Makarya iket kemben, supena radinan bebucal lingsem dhateng, nyukani suku kijing. sakit wanci, lingsem mantuk radin dipun entosi. Tiganandhapan mambet doyan nyipeng, kaca tlngal ayam tanem, estri warni manah makarya; nyipeng awan kancing sesupe andhapan raup angsal enggal tebih, wingking piring. Wawarat, tumut cepeng nginum bapak segawon gelang teken gugah sesupe driji. Supe, nedha inggih sekar; mbikak surya medal, siti: artos tilem mular badan.</p>
							<a href="#" class="btn btn-info">Selengkapnya</a>
						</div>
					</div>
					<!--
					<a href="#myCarousel" class="carousel-control left" data-slide="prev">&lsaquo;</a>
					<a href="#myCarousel" class="carousel-control right" data-slide="next">&rsaquo;</a>
					-->
					</div>
					<div class="row">
					<a href="#myModal" data-toggle="modal" class="btn btn-large btn-success span2 offset5">Login</a>
					</div>
					<!-- Modal -->
					<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 id="myModalLabel"><i class="icon icon-user"></i>Login</h3>
						</div>
						<div class="modal-body">
							<form method="post" action="login.php">
								<table style="width:100%">
									<colgroup style="width:40%;"></colgroup>
									<colgroup style="width:60%;text-align:right;"></colgroup>
									<tr>
										<td>
											<label for="username">Nama User</label>
										</td>
										<td>
											<input type="text" id="username" name="username" required placeholder="username" class="pull-right">
										</td>
									</tr>
									<tr>
										<td>
											<label for="password">Kata Sandi</label>
										</td>
										<td>
											<input type="password" id="password" name="password" required placeholder="password" class="pull-right">
										</td>
									</tr>
									<tr>
										<td colspan="2"><input type="submit" class="btn btn-primary btn-large pull-right" value="login"></td>
									</tr>
								</table>
							</form>
						</div>
					</div>
					<!-- end of modal -->
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
	</script>
	</body>
</html>