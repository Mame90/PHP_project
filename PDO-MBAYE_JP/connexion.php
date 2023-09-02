<?php
$host="localhost";
$user="root";
$pass="";
$base="d2a";
$con=mysqli_connect($host,$user,$pass,$base)
or die("Erreur de connexion".mysqli_connect_err($con));

/*try
{
  $con=new PDO('mysql:host=localhost;dbname=d2a','root','');
  //echo "connexion reussie";
}
catch(PDOException $e)
{
   die("Erreur : ".$e->getMessage());
}*/
?>
