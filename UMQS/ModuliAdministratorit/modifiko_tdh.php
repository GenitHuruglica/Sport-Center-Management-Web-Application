<?php

	include("kontrollo.php");	
?>
<?php

include_once("konfigurimi.php");

if(isset($_POST['modifiko_tdh']))
{	
	$ID_Tedhenat = $_POST['ID_Tedhenat'];
	
	$Titulli=$_POST['Titulli'];
	$PershkrimiD=$_POST['PershkrimiD'];
	$Dosje=$_POST['Dosje'];	
	$Pamja=$_POST['Pamja'];	
	
	if(empty($Titulli) || empty($PershkrimiD) || empty($Dosje) || empty($Pamja)){	
			
		if(empty($Titulli)) {
			echo "<font color='red'>Titulli eshte e zbrazet.</font><br/>";
		}
		
		if(empty($PershkrimiD)) {
			echo "<font color='red'>Pershkrimi eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Dosje)) {
			echo "<font color='red'>Dosja eshte e zbrazet.</font><br/>";
		}	
	if(empty($Pamja)) {
			echo "<font color='red'>Pamja eshte e zbrazet.</font><br/>"; 
		}		
	} else {	
        mysqli_query($lidh_modifiko_tdh,"SET @tdh_id=${ID_Tedhenat}");
		mysqli_query($lidh_modifiko_tdh,"SET @Titulli='${Titulli}'");
		mysqli_query($lidh_modifiko_tdh,"SET @PershkrimiD='${PershkrimiD}'");
		mysqli_query($lidh_modifiko_tdh,"SET @Dosje='${Dosje}'");
		mysqli_query($lidh_modifiko_tdh,"SET @Pamja='${Pamja}'");
		$rezultati = mysqli_query($lidh_modifiko_tdh,"CALL modifiko_tdh(@Titulli,@PershkrimiD,@Dosje,@Pamja,@tdh_id)");
		if($rezultati){
			header("Location: modifiko_tedhena.php");
		}else
		{
			die("Procedura nuk mund te ekzekutohet!");
		}
		
		
	}
}
?>
<?php

$ID_Tedhenat = $_GET['ID_Tedhenat'];

$rezultati = mysqli_query($lidh_id_tdh,"CALL selekto_id_tdh('$ID_Tedhenat')");

while($res = mysqli_fetch_array($rezultati))
{
	$TitullI = $res['Titulli'];
	$Pershkrimi = $res['PershkrimiD'];
	$Dosja = $res['Dosje'];
	$Pamje = $res['Pamja'];
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
								<h2>Modifiko te dhena</h2>
								<div class="box">
								<form Form="form1" method="post" action="modifiko_tdh.php">
											<div class="row gtr-uniform">
												<div class="col-12">
													<input type="text" name="Titulli" value='<?php echo $TitullI;?>'   required />
												</div>
												<div class="col-12">
													<textarea name="PershkrimiD"  rows="10" cols="30"><?php echo $Pershkrimi;?></textarea>
												</div>
												<div class="col-12">
													<input type="text" name="Dosje" value='<?php echo $Dosja;?>'   required />
												</div>
												<div class="col-12">
													<input type="text" name="Pamja" value='<?php echo $Pamje;?>'   required />
												</div>
												<input type="hidden" name="ID_Tedhenat" value='<?php echo $_GET['ID_Tedhenat'];?>' />
												<div class="col-12">
													<input type="submit" class="primary small" name="modifiko_tdh" value="Modifiko">
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