<?php

	session_start();
	include("konfigurimi.php"); 
	
	$error = ""; 
	if(isset($_POST["kycu"]))
	{
		if(empty($_POST["perdoruesi"]) || empty($_POST["fjalkalimi"]))
		{
			$error = "Te dy fushat duhet te plotesohen.";
		}else
		{
			
			$perdoruesi=$_POST['perdoruesi'];
			$fjalkalimi=md5($_POST['fjalkalimi']);
			
			$sql="CALL selekto_vpid('$perdoruesi','$fjalkalimi')";
			$rezultati=mysqli_query($lidh,$sql);
			$rresht=mysqli_fetch_array($rezultati,MYSQLI_ASSOC);
			
			if(mysqli_num_rows($rezultati) == 1)
			{
				$_SESSION['perdoruesi'] = $perdoruesi; 
				header("location: admin_shtepija.php"); 
			}else
			{
				$error = "Perdoruesi ose fjalkalimi jane gabim.";
			}
		}
	}
?>