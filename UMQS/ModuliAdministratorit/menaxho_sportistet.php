<?php include("kontrollo.php");	 ?>

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
								<div class="box">
								<h2>SHTO TE DHENAT E SPORTIT</h2>
								<form enctype="multipart/form-data" method="post" action="shto_sportist.php">
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
													<input type="text" name="Emri_Sportisti" id="Emri_Sportisti" value="" placeholder="Emri i Sportistit" />
												</div>
												<div class="col-12">
												<input type="text" name="Mbiemri_Sportisti" id="Mbiemri_Sportisti" value="" placeholder="Mbiemri i Sportistit" />
												</div>
												<div class="col-12">
												<input type="text" name="Mosha_Sportisti" id="Mosha_Sportist" value="" placeholder="Mosha e Sportistit" />
												</div>
												<div class="col-12">
												<input type="text" name="Vendbanimi_Sportisti" id="Vendbanimi_Sportisti" value="" placeholder="Vendbanimi i Sportistit" />
												</div>
												<div class="col-12">
												<input type="hidden" name="Emri_F" value="10000000" />
													<input name="Foto_S" type="file" />
												</div>
												
												<div class="col-12">
													<input type="submit" name="shto_sportist" value="Shto" class="primary" />
												</div>
												
											</div>
									</form>
								</div>
							</section>
							<section >
								<div class="box">
								<h2>KERKO TË DHËNAT E SPORTISTIT PËR MODIFIKIM OSE FSHIRJE</h2>
								<form method="post" action="">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="p_kon"  value="%" placeholder="Emri ose Mbiemri i sportistit" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="submit"  value="Kerko" class="primary" />
												</div>
										</div>
									</form>
									<hr>
                                    
								<div class="table-wrapper">
											<table>
												
												<tr >
		                                               <th>Emri Sportistit</th>
		                                                <th>Mbiemri Sportistit</th>
		                                                 <th>Mosha Sportistit</th>
		                                                 <th>Vendbanimi Sportistit</th>
		                                                 <th>Sporti</th>
		                                                 <th>Foto_S</th>
		                                                 <th>Emri_F</th>
		                                                <th>Modifiko</th>
		                                                 <th>Fshije</th>
	                                            </tr>
	                                     

                                                      <?php
										if (!empty($_REQUEST['p_kon'])) {

										$p_kon = mysqli_real_escape_string($lidh,$_REQUEST['p_kon']);     

										$sql = mysqli_query($lidh,	"CALL selekto_sportist('$p_kon')"); 

										while($rresht = mysqli_fetch_array($sql)) {
										       		
												echo "<tr>";
												echo "<td>".$rresht['Emri_Sportisti']."</td>";
												echo "<td>".$rresht['Mbiemri_Sportisti']."</td>";
												echo "<td>".$rresht['Mosha_Sportisti']."</td>";
												echo "<td>".$rresht['Vendbanimi_Sportisti']."</td>";	
												echo "<td>".$rresht['Sporti']."</td>";	

												echo "<td><img src=data:image/jpeg;base64,".base64_encode($rresht['Foto_S'])." width='80'  height='100'/></td>";
												echo "<td>".$rresht['Emri_F']."</td>";	
												
												
												echo "<td><a href=\"modifiko_sportistet.php?ID_Sportisti=$rresht[ID_Sportisti]\" class='button' class='button primary'>Modifiko</a</td>";	
echo "<td><a href=\"fshije_sportistet.php?ID_Sportisti=$rresht[ID_Sportisti]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\" class='button' class='button primary'>Fshijë</a> </td>";
				
														
											}

										}

										?>
                            

                            </table>
                        </div>
                        

</div>
<br><br>
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