<?php

include('konfigurimi.php');
session_start();
$kontrollo_p=$_SESSION['perdoruesi'];
$ses_sql = mysqli_query($lidh_kp,"CALL selekto_kp('$kontrollo_p')");
$rreshti=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$kycja_perdoruesit=$rreshti['perdoruesi'];
if(!isset($kontrollo_p))
{ header("Location: index.php");} 
?>