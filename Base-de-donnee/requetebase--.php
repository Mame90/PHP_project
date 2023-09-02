<?php
$host="localhost« ;
 $user="root"; 
 $pass=""; 
 $con=mysql_connect($host, $user, $pass);
  if(!$con) die ("erreur de connexion à MySQL");
?>
<?php
$base="web2"; $db= msql_select_db($base); if(!$db) die("Erreur de connexion à la base $base");
?>
