<?php
	include("kontrollo.php");	
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php include_once("konfigurimi.php"); ?>
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

						
						<section id="content" class="main" >
							<p style="text-align:right;">Përshëndetje, <em><?php  echo $kycja_perdoruesit;?>!</em></p>
							<div class="box">
								<br>
				
                                

                                       
										<h2>MODULI ADMINISTRATORIT !</h2>
										<div class="row">
											
										<h4>Ky modul mundeson menaxhimin e te dhenave te webaplikacionit (Moduli Perdoruesit & Moduli i Administratorit)</h4>
									</div>
								</div>
									<br>
									<br>
									</div>
									</section>


						
						
				
					<?php include_once("fundi.php"); ?>

			</div>

		
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>