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

if(isset($_POST['shto_kontakt'])) {	
	$Subjekti = mysqli_escape_string($lidh,$_POST['Subjekti']);
	$Mesazhi = mysqli_escape_string($lidh,$_POST['Mesazhi']);
	$Email = mysqli_escape_string($lidh,$_POST['Email']);
	 $Email = filter_var($Email,FILTER_SANITIZE_EMAIL);	
	
	if(empty($Subjekti) || empty($Mesazhi) || empty($Email)) {			
		if(empty($Subjekti)) {echo "<font color='red'>Subjekti eshte i zbrazet.</font><br/>";}
		if(empty($Mesazhi)) {echo "<font color='red'>Mesazhi eshte i zbrazet.</font><br/>";}
		if(empty($Email)) {echo "<font color='red'>Email eshte e e zbrazet.</font><br/>";}
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";
	} 
	else if (filter_var($Email,FILTER_VALIDATE_EMAIL) === false) {
      	echo "Emaili - $Email eshte  jovalide!";
      	echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";
      }else { 
		
		$rezultati = mysqli_query($lidh_sh_k, "CALL shto_kontakt('$Subjekti','$Mesazhi','$Email')");
	
		echo "<script>
         setTimeout(function(){
            window.location.href = 'kontakti.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>


