<?php

include("konfigurimi.php");


$pid = $_GET['pid'];

$rezultati = mysqli_query($lidh_fp,"CALL fshije_p('$pid')");


header("Location:fshije_perdorues.php");
?>
