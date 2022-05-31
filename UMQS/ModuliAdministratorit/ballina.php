<?php

	include("kontrollo.php");	
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>UMQS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		
			<div id="wrapper">

				
					<?php include_once("koka.php"); ?>

				
					<?php include_once("meny.php"); ?>


        
					<div id="main">

								<section id="first" class="main special">
									<p style="text-align:right;">Përshëndetje, <em><?php  echo $kycja_perdoruesit;?>!</em></p>
								<header class="major">
									<h2>MENAXHIMI I TE DHENAVE TE BALLINES</h2>
								</header>
								<hr>
								<ul class="features">
									<li>
										<div class="box">
										<a href="menaxho_sportet.php" class="button primary">MENAXHO SPORTET</a>
										<br><br>
										<p>Forma per menaxhimin e llojeve te sporteve ne uebaplikacion.</p>
									</div>
									</li>
									<li>
										<div class="box">
										<a href="menaxho_sportistet.php" class="button primary">MENAXHO SPORTISTET</a>
										<br><br>
										<p>Forma per menaxhimin e sportisteve ne uebaplikacion.</p>
									</div>
									</li>
									<li>
										<div class="box">
										<a href="modifiko_tedhena.php" class="button primary">MENAXHO TE DHENAT</a>
										<br><br>
										<p>Forma per menaxhimin e te dhenave ne uebaplikacion.</p>
									</div>
									</li>
								</ul>
								
							</section>
						

						
						</div>
				
					<?php include_once("fundi.php"); ?>

			

		
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>