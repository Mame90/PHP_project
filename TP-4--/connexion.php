<?php
$host="localhost";
$user="root";
$pass="";
$base="application";
$con=mysqli_connect($host,$user,$pass,$base)
or die("erreur de connexion à MySQL".mysqli_connect_error($con));
//echo("page connecte");
//mysqli_close($con);
?>
