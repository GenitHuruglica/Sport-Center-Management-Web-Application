
<html>
	<head>
		<title>UMQS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

<?php

include_once("konfigurimi.php");

if(isset($_POST['shto_sportist'])) {	
	$Emri_Sportisti = $_POST['Emri_Sportisti'];
	$Mbiemri_Sportisti = $_POST['Mbiemri_Sportisti'];
	$Mosha_Sportisti = $_POST['Mosha_Sportisti'];
	$Vendbanimi_Sportisti = $_POST['Vendbanimi_Sportisti'];
	$ID_Sporti = $_POST['ID_Sporti'];
	
	
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
		
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	} else if($Mosha_Sportisti<=10)
	        {
	        	trigger_error("Per tu regjistruar ne qender mosha duhet te jete +10");
	        	echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	    }
	else { 
		
		$rezultati = mysqli_query($lidh_shto_sportista, "CALL shto_sportista('$Emri_Sportisti','$Mbiemri_Sportisti','$Mosha_Sportisti','$Vendbanimi_Sportisti','$ID_Sporti','$Foto_S','$Emri_F')");
		
		
			echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_sportistet.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
		
	}
}
?>

</body>
</html>