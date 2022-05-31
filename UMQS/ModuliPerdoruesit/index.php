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

						
							<section id="first" class="main special">


								<?php 
					$vizitat=1;
					if (isset($_COOKIE["vizitat"])) {
						$vizitat = (int)$_COOKIE["vizitat"];
					} $Muaji = 2592000 + time();

					setcookie("vizitat", date("F jS - g:i a"), $Muaji);
					if(isset($_COOKIE["vizitat"]))
					{
						$efundit = $_COOKIE["vizitat"];
						echo "<p style='text-align:right;'> Vizita juaj e fundit ishte me: " . $efundit. "</p>";
					}
					else
					{
						echo "<p style='text-align:right;'> Vizita juaj e pare ne Uebaplikacionin tone! Ju deshirojme mirsardhje! </p>";
					}
					?>


								<header class="major">
									<h2>Sportistet sipas llojit te Sportit </h2>
								</header>
								<hr>
								<ul class="features">

									<?php
            
									$rezultati = mysqli_query($lidh_spo, " CALL selekto_spo()");

            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
									<li>
										<div class="box">
										<span class="image fit"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rreshti['Foto_S'] ).'" width="100%" height="100%">'; ?></span>
										<h3>Emri -  <?php echo $Emri_Sportisti; ?> </h3>
										<h3>Mbiemri - <?php echo $Mbiemri_Sportisti; ?> </h3>
										<p>Mosha - <?php echo $Mosha_Sportisti; ?><br>
										Vendbanimi - <?php echo $Vendbanimi_Sportisti; ?><br>
										Lloji Sportit - <?php echo $Sporti; ?> </p>
									</div>
									</li>
									
									<?php } ?>	
								</ul>
								<hr>
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