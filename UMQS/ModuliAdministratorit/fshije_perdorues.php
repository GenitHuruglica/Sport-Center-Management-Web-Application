<?php

	include("kontrollo.php");	
?>
<?php

include_once("konfigurimi.php");



$rezultati = mysqli_query($lidh_sp,
"CALL selekto_perdorues()");
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
								<div class="box">
								<h2>KERKO TË DHËNAT E PERDORUESIT PËR FSHIRJE </h2>
								<form method="post" action="">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="p_kon"  value="%" placeholder="Perdoruesi ose Email" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="submit"  value="Kerko" class="primary" />
												</div>
										</div>
									</form>

									<div class="table-wrapper">
											<table>
												<tr >
		                                               <td><b>Perdoruesi</b></td>
		                                                <td><b>Fjalkalimi<b></td>
		                                                 <td><b>Email<b></td>
		                                                 <td><b>Fshije<b></td>
	                                            </tr>

<?php
if (!empty($_REQUEST['p_kon'])) {
$p_kon = mysqli_real_escape_string($lidh,$_REQUEST['p_kon']);     
$sql = mysqli_query($lidh_pkon,"CALL selekto_pkon('$p_kon')"); 
while($rresht = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td><b>".$rresht['perdoruesi']."</b></td>";
		echo "<td><b>".$rresht['fjalkalimi']."</b></td>";
		echo "<td><b>".$rresht['email']."</b></td>";	
		echo "<td><a href=\"fshije_p.php?pid=$rresht[pid]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini perdoruesin?')\" class='button' class='button primary'>Fshije</a>	 </td></tr>";
	}

}

?>
                            

                            </table>
                        </div>
                        

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