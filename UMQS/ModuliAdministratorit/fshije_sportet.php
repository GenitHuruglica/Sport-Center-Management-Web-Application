<?php

include("konfigurimi.php");


$p_ID_Sporti = $_GET['ID_Sporti'];


$rezultati = mysqli_query($lidh_dspo,"CALL fshije_spo('$p_ID_Sporti')");


header("Location:menaxho_sportet.php");
?>