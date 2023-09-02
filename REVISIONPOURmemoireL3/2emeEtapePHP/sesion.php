<?php
session_start();
$annee=2018;
$mois=05;
$_SESSION["annee"]=$annee;
$_SESSION["mois"]=$mois;
echo "annee ".$_SESSION["annee"]."<br>";
echo "mois ".$_SESSION["mois"]."<br>";
?>
<a href="session2.php">Aller page 2</a><br>
<a href="session3.php">Aller page 3</a>