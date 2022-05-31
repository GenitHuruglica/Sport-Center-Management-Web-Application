<?php

include("konfigurimi.php");


$ID_Kontakti = $_GET['ID_Kontakti'];


$rezultati = mysqli_query($lidh_fshije_kont,"CALL fshije_kont('$ID_Kontakti')");

header("Location:fshije_kontakt.php");
?>
