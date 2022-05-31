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

if(isset($_POST['shto_p'])) {	
	$perdoruesi = mysqli_real_escape_string($lidh,$_POST['perdoruesi']);
	$fjalkalimi = mysqli_real_escape_string($lidh,MD5($_POST['fjalkalimi']));
	$email = $_POST['email'];
		

	if(empty($perdoruesi) || empty($fjalkalimi) || empty($email)) {			
		if(empty($perdoruesi)) {echo "<font color='red'>Fusha perdoruesi eshte e zbrazet.</font><br/>";}
		if(empty($fjalkalimi)) {echo "<font color='red'>Fusha fjalkalimi eshte e zbrazet.</font><br/>";}
		if(empty($email)) {echo "<font color='red'>Fusha e email eshte e zbrazet.</font><br/>";}
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";
	} else { 
		 
		
		$rezultati = mysqli_query($lidh_sh_p, "CALL shto_perdorues('$perdoruesi','$fjalkalimi','$email')");
		
	echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
		
	}
}
?>

</body>
</html>
