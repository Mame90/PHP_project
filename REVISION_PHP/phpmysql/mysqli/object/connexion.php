<?php
$host="localhost";
$user="root";
$pass="";
$base="web2";
$con=new mysqli($host,$user,$pass,$base) ;
if($con->connect_errno) die("Erreur code ".$con->connect_errno." : ". $con->connect_error);
echo "Connexion réussie";
?>