<?php
try
{
  $con=new PDO('mysql:host=localhost;dbname=application','root','');
  //echo "connexion reussie";
}
catch(PDOException $e)
{
   die("Erreur : " . $e->getMessage());
}
?>
