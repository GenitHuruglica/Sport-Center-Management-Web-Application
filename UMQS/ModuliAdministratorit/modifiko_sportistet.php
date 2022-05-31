<?php

	include("kontrollo.php");	
?>

<?php

include_once("konfigurimi.php");

if(isset($_POST['modifiko_sportistet']))
{	
	$ID_Sportisti = $_POST['ID_Sportisti'];
	$Emri_Sportisti=$_POST['Emri_Sportisti'];
	$Mbiemri_Sportisti=$_POST['Mbiemri_Sportisti'];
	$Mosha_Sportisti=$_POST['Mosha_Sportisti'];	
	$Vendbanimi_Sportisti=$_POST['Vendbanimi_Sportisti'];		
	$ID_Sporti=$_POST['ID_Sporti'];	
	
	$Foto_S =addslashes (file_get_contents($_FILES['Foto_S']['tmp_name']));
	$Emri_F = $_FILES['Foto_S']['name'];
	$maxsize = 10000000; 
	
	
	if(empty($Emri_Sportisti) || empty($Mbiemri_Sportisti)|| empty($Mosha_Sportisti) || empty($Vendbanimi_Sportisti))
	 {
				
		if(empty($Emri_Sportisti)) {
			echo "<font color='red'>Emri i sportistit eshte  i zbrazet.</font><br/>";
		}
		
		if(empty($Mbiemri_Sportisti)) {
			echo "<font color='red'>Mbiemri i sportistit eshte i zbrazet.</font><br/>";
		}
		
		if(empty($Mosha_Sportisti)) {
			echo "<font color='red'>Mosha e sportistit eshte e zbrazet.</font><br/>";
		}
		if(empty($Vendbanimi_Sportisti)) {
			echo "<font color='red'>Vendbanimi i sportistit eshte e zbrazet.</font><br/>";
		}

	} else {

		 mysqli_query($lidh_modifiko_sportist,"SET @ID1=${ID_Sportisti}");
		 mysqli_query($lidh_modifiko_sportist,"SET @ID2=${ID_Sporti}");
		mysqli_query($lidh_modifiko_sportist,"SET @emri='${Emri_Sportisti}'");
		mysqli_query($lidh_modifiko_sportist,"SET @mbiemri='${Mbiemri_Sportisti}'");
		mysqli_query($lidh_modifiko_sportist,"SET @mosha='${Mosha_Sportisti}'");
		mysqli_query($lidh_modifiko_sportist,"SET @vendbanimi='${Vendbanimi_Sportisti}'");
	    mysqli_query($lidh_modifiko_sportist,"SET @foto='${Foto_S}'");
		mysqli_query($lidh_modifiko_sportist,"SET @emrif='${Emri_F}'");
		$rezultati = mysqli_query($lidh_modifiko_sportist,"CALL modifiko_sportist(@emri,@mbiemri,@mosha,@vendbanimi,@ID2,@foto,@emrif,@ID1)");
		if($rezultati){
			header("Location: menaxho_sportistet.php");
		}else
		{
			die("Procedura nuk mund te ekzekutohet!");
		}
		
		
	}
}
?>
<?php

$ID_Sportisti = $_GET['ID_Sportisti'];

$rezultati = mysqli_query($lidh_idsportisti,"CALL selekto_idsportisti('$ID_Sportisti')");

while($res = mysqli_fetch_array($rezultati))
{
	$Emri_Sportist = $res['Emri_Sportisti'];
	$Mbiemri_Sportist = $res['Mbiemri_Sportisti'];
	$Mosha_Sportist = $res['Mosha_Sportisti'];
	$Vendbanimi_Sportist = $res['Vendbanimi_Sportisti'];
	$ID_Sporti = $res['ID_Sporti'];
}
?>


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
								<div class="box">
								<h2>SHTO TE DHENAT E SPORTISTIT</h2>
								<form enctype="multipart/form-data" method="post" action="modifiko_sportistet.php" name="form">
											<div class="row gtr-uniform">
												<div class="col-12">
													<select name="ID_Sporti" id="ID_Sporti">
													<option selected="selected">Zgjedh Sportin</option>
														<?php
														$res=mysqli_query($lidh_tgj_spo,"CALL selekto_tgj_spo()");
														while($rresht=$res->fetch_array())
														{
															?>
															<option value="<?php echo $rresht['ID_Sporti']; ?>"><?php echo $rresht['Sporti']; ?></option>
															<?php
														}
														?>
												</select>
												</div>
												<div class="col-12">
													<input type="text" name="Emri_Sportisti" id="Emri_Sportisti"  placeholder="Emri i Sportistit" value='<?php echo $Emri_Sportist;?>' required  />
												</div>
												<div class="col-12">
												<input type="text" name="Mbiemri_Sportisti" id="Mbiemri_Sportisti"  placeholder="Mbiemri i Sportistit" value='<?php echo $Mbiemri_Sportist;?>' required />
												</div>
												<div class="col-12">
												<input type="text" name="Mosha_Sportisti" id="Mosha_Sportist"  placeholder="Mosha e Sportistit" value='<?php echo $Mosha_Sportist;?>' required  />
												</div>
												<div class="col-12">
												<input type="text" name="Vendbanimi_Sportisti" id="Vendbanimi_Sportisti"  placeholder="Vendbanimi i Sportistit" value='<?php echo $Vendbanimi_Sportist;?>' required  />
												</div>
												<div class="col-12">
												<input type="hidden" name="Emri_F" value="10000000" />
													<input name="Foto_S" type="file" />
												</div>
												<input type="hidden" name="ID_Sportisti" value='<?php echo $_GET['ID_Sportisti'];?>' />
												<div class="col-12">
													<input type="submit" name="modifiko_sportistet" value="Modifiko" class="primary" />
												</div>
												
											</div>
									</form>
								</div>
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