<?php

	include("kontrollo.php");	
?>
<?php

include_once("konfigurimi.php");

if(isset($_POST['modifiko_sportet']))
{	
	$ID_Sporti = $_POST['ID_Sporti'];
	
	$Sporti=$_POST['Sporti'];
	
	
	
	if(empty($Sporti) ) {	
			
		if(empty($Sporti)) {
			echo "<font color='red'>Fusha Sporti eshte e zbrazet.</font><br/>";
		}
		
	
	} else {	

		mysqli_query($lidh_m_spo,"SET @id_s = ${ID_Sporti}");
		mysqli_query($lidh_m_spo,"SET @spo = '${Sporti}'");
		$rezultati=mysqli_query($lidh_m_spo,"CALL modifiko_spo(@spo,@id_s)");
		if($rezultati){
			header("Location: menaxho_sportet.php");
		}else
		{
			die("Procedura nuk mund te ekzekutohet!");
		}
		
	}
}
?>
<?php

$p_ID_Sporti = $_GET['ID_Sporti'];


$rezultati = mysqli_query($lidh_nga_id,"CALL selekto_nga_id('$p_ID_Sporti')");

while($rez = mysqli_fetch_array($rezultati))
{
	$Sporti = $rez['Sporti'];
	
}
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
								<h2>Modifiko te dhenat e Sportit</h2>
								<form method="post" action="modifiko_sportet.php">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="Sporti" value='<?php echo $Sporti;?>'   required />
												</div>
												<input type="hidden" name="ID_Sporti" value='<?php echo $_GET['ID_Sporti'];?>' />
												<div class="col-6 col-12-xsmall">
													<input type="submit" name="modifiko_sportet" value="Modifiko" class="primary" />
												</div>
										</div>
									</form>
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