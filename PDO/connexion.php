<?php
try
{
	$con=new PDO('mysql:host=localhost;dbname=web2','root','');
	//echo "connexion reussie";
}
catch(PDOException $e)
{
	die("Erreur ".$e->getMessage());
}
?>