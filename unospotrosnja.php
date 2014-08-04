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
								<p class="subtitle">Koliko para ste ovog puta ostavili na pumpi?</p>
								<?php include 'readgorivo2.php'; 
                                                                
                                                                ?>
                                                                
                                                        </section>
                                                    
						</div>
                                            <div class="4u">
							<section id="sidebar">
								<h2>Gorivo & cena</h2>
								<p class="subtitle">Unos se vrsi na mesecnom nivou</p>
								<p>Kolicina goriva u litrima  kao i  cena goriva.</p>
                                                                   
                                                                    
                                                                    <form name="unospotrosnja" action="insertpotrosnja.php" method="post">
                                                                    <input type="text" name="litar"> Gorivo
                                                                    <br>
                                                                    <input type="text" name="cenag"> Cena goriva u &euro;
                                                                    <br>
                                                                    <p class="button-style"><a href="#" onclick="unospotrosnja.submit();">Unos potrosnje</a></p>
                                                                    </form>					
                                                                
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
					<p>Unos troskova goriva u bazu podataka.</p>
					
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