<?php

	include('kycu.php'); 
	if ((isset($_SESSION['perdoruesi']) != '')) 
	{
		header('Location: admin_shtepija.php');
	}	
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

				
				


        
					<div id="main">

						
						<section id="content" class="main" >
							<div class="box">
								<br>
				
                                <h5>Udhezim</h5>
								<p> <sup>Për tu kycur ne uebaplikacion ju duhet te krijoni nje llogari, lutem të kontaktoni administarorin!</sup></p>
								
								<hr>

                                       
										<h2>Forma per Kycje !</h2>
										<div class="row">
											
										<form method="post" action="">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="perdoruesi" id="perdoruesi" value="" placeholder="Perdoruesi" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="password" name="fjalkalimi" id="fjalkalimi" value="" placeholder="Fjalkalmi" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="submit" name="kycu"  value="Kycu" class="primary" />
												</div>
											</div>
										</form>
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