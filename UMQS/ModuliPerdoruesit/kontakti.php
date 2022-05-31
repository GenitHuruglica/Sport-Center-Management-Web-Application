<?php include_once("konfigurimi.php"); ?>
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

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php include_once("koka.php"); ?>

				<!-- Nav -->
					<?php include_once("meny.php"); ?>

				<!-- Main -->
					<div id="main">


                         <div class="box">
						<section>
							<br>
							<br>
							<div class="box">
										<h2>Forma per Kontakt</h2>
										<form method="post" action="shto_kontakt.php">
											<div class="row gtr-uniform">
												<div class="col-12">
													<input type="text" name="Subjekti" id="Subjekti" value="" placeholder="Subjekti" />
												</div>
												<div class="col-12">
													<textarea name="Mesazhi" id="Mesazhi" placeholder="Mesazhi" rows="6"></textarea>
												</div>
												<div class="col-12">
													<input type="email" name="Email" id="Email" value="" placeholder="Email" />
												</div>
												
												<div class="col-12">
													<input type="submit" name="shto_kontakt" value="Dergo Mesazh" class="primary" />
												</div>
												
											</div>
										</form>
									</div>
									<br>
									<br>
									</section>
								</div>
						</div>
				<!-- Footer -->
					<?php include_once("fundi.php"); ?>

			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>