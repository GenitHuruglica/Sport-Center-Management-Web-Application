<?php

include("konfigurimi.php");


$ID_Sportisti = $_GET['ID_Sportisti'];


$rezultati = mysqli_query($lidh_fshije_sportist,"CALL fshije_sportist('$ID_Sportisti')");

header("Location:menaxho_sportistet.php");
?>

