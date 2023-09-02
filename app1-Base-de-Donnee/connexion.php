<?php
$host="localhost";
$user="root";
$pass="";
$base="web2";
$con=mysqli_connect($host,$user,$pass,$base)
or die ("Erreur de connexion ".mysqli_connect_error($con));
//echo "Connexion réussie";
?>