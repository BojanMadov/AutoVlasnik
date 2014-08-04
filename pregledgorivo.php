<!DOCTYPE HTML>

<html>
<head>
<title>AutoVlasnik</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<noscript>
<link rel="stylesheet" href="css/5grid/core.css" />
<link rel="stylesheet" href="css/5grid/core-desktop.css" />
<link rel="stylesheet" href="css/5grid/core-1200px.css" />
<link rel="stylesheet" href="css/5grid/core-noscript.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<script src="Chart.js"></script>
		<meta name = "viewport" content = "initial-scale = 1, user-scalable = no">
		<style>
			canvas{
			}
		</style>
<script type="text/javascript" src="grafik.js"></script>

<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head>

<body>
<div id="header-wrapper">
	<header id="header" class="5grid-layout">
		<div class="row">
			<div class="12u" id="logo"> <!-- Logo -->
				<h1><a href="index.html" class="mobileUI-site-name">AutoVlasnik</a></h1>
				<p>by Group6</p>
			</div>
		</div>
		<div class="row">
			<div class="12u" id="menu">
				<nav class="mobileUI-site-nav">
					<ul>
						<li class="first"><a href="index.html">Pocetna</a></li>
						<li><a href="pregledvozila.php">Pregled vozila</a></li>
						<li><a href="pregledservis.php">Pregled servisa</a></li>
						<li><a href="pregledpopravke.php">Popravke!</a></li>
						<li><a href="onama.html">O Nama...</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
</div>
<div id="page-wrapper">
	<div class="5grid-layout">
		<div id="page">
			<div class="row">
				<div class="12u">
					<div class="row">
						<div class="8u">
							<section id="content">
								<h2>Pregled potrosnje</h2>
								<p class="subtitle">Koliko zapravo vas automobil trosi...</p>
								<p><canvas id="canvas" height="300" width="750"></canvas></p>
                                                                
                                                        </section>
                                                    
						</div>
                                            <div class="4u">
							<section id="sidebar">
								<h2>Info</h2>
								<p class="subtitle">Godisnji pregled potrosnje</p>
								<p>Kolicina goriva u litrima (plavo polje) kao i cena goriva u &euro; (sivo polje) u periodu od 12 meseci. Grafik jasno prikazuje oscilacije u kolicini potrosenog goriva u raznim mesecima kao i kolicinu novca utrosenog na ovaj vas hir...</p>
                                                                
                                                                <?php include 'readgorivo.php';
                                                                ?>    
                                                                <script type="text/javascript">

                                                                    var jx = <?php echo json_encode($num1); ?>;
                                                                    var jy = <?php echo json_encode($num2); ?>;    
                                                                

                                                                 </script>
                                                                <p class="button-style" onclick="grafik(jx,jy);"><a href="#">Prikazi</a></p>						
                                                                
							</section>
						</div>
                                            
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer-wrapper">
	<div id="footer-content" class="5grid-layout">
		<div class="row">
			
			<div class="6u">
				<section>
					<h2>Opis trenutne strane</h2>
					<p>Graficki pregled troskova za gorivo.</p>
					
				</section>
			</div>
		</div>
	</div>
</div>
<div class="5grid-layout">
	<div id="copyright">
		<section>
			<p>&copy; AutoVlasnik | Design: Group6</p>
		</section>
	</div>
</div>
</body>
</html>