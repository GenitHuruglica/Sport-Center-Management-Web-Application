


<?php

	include("kontrollo.php");	
?>
<?php

include_once("konfigurimi.php");

if(isset($_POST['modifiko_pr']))
{	
	$pid = $_POST['pid'];
	
	$perdoruesi=$_POST['perdoruesi'];
	$fjalkalimi=MD5($_POST['fjalkalimi']);
	$email=$_POST['email'];	
	
	
	if(empty($perdoruesi) || empty($fjalkalimi) || empty($email)) {	
			
		if(empty($perdoruesit)) {
			echo "<font color='red'>Fusha perdoruesit eshte e zbrazet.</font><br/>";
		}
		
		if(empty($fjalkalimi)) {
			echo "<font color='red'>Fusha fjalkalimit eshte e zbrazet.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Fusha e emailit eshte e zbrazet.</font><br/>";
		}		
	} else {	

		mysqli_query($lidh_modp,"SET @pid=${pid}");
		mysqli_query($lidh_modp,"SET @perdoruesi='${perdoruesi}'");
		mysqli_query($lidh_modp,"SET @fjalkalimi='${fjalkalimi}'");
		mysqli_query($lidh_modp,"SET @email='${email}'");
		
		$rezultati = mysqli_query($lidh_modp,"CALL modifiko_per(@perdoruesi,@fjalkalimi,@email,@pid)");
		if($rezultati){
			header("Location: modifiko_perdorues.php");
		}else
		{
			die("Procedura nuk mund te ekzekutohet!");
		}
		

		
	}
}
?>
<?php

$pid = $_GET['pid'];


$rezultati = mysqli_query($lidh_ppid,"CALL selekto_ppid('$pid')");

while($res = mysqli_fetch_array($rezultati))
{
	$perdoruesi = $res['perdoruesi'];
	$fjalkalimi = $res['fjalkalimi'];
	$email = $res['email'];
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
								<h2>Modifiko te dhenat e Perdoruesit</h2>
								<div class="box">
								<form Perdorues="form1" method="post" action="modifiko_p.php">
											<div class="row gtr-uniform">
												<div class="col-12">
													<input type="text" name="perdoruesi" value='<?php echo $perdoruesi;?>'   required />
												</div>
												<div class="col-12">
													<input type="text" name="fjalkalimi" value='<?php echo $fjalkalimi;?>'   required />
												</div>
												<div class="col-12">
													<input type="text" name="email" value='<?php echo $email;?>'   required />
												</div>
												<input type="hidden" name="pid" value='<?php echo $_GET['pid'];?>' />
												<div class="col-12">
													<input type="submit" class="primary small" name="modifiko_pr" value="Modifiko">
												</div>
												
											</div>
				                 </form>
			                      </div>
			            </section>
		              </div>

				<!-- Footer -->
				<?php include_once("fundi.php"); ?>
			</div>

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