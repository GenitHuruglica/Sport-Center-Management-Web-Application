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

if(isset($_POST['shto_sport'])) {	
	$Sporti = $_POST['Sporti'];
	
		
	
	if(empty($Sporti)) {			
		if(empty($Sporti)) {echo "<font color='red'>Fusha Sporti eshte e zbrazet.</font><br/>";}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";
	} else { 
		 
			
		$result = mysqli_query($lidh_spo, "CALL shto_spo('$Sporti')");
		
		
		echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_sportet.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>
