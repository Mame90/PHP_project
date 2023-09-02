<?php
session_start();
if(isset($_SESSION["annee"]))
{
$annee=$_SESSION["annee"];
echo "annee = ".$annee."<br>";

}
if (isset($_SESSION["mois"])){
    $mois=$_SESSION['mois'];
    echo "mois = ".$mois."<br>";
}
$annee=2017;
unset($_SESSION["mois"]);
?>
<a href="sesion.php">Aller a la Page 1</a><br>
<a href="session3.php">Aller a la Page 3</a>
