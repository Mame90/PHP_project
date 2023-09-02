<?php
if (isset($_REQUEST['valider']))
{
    $prenom=$_GET['prenom'];
   // $nom=$_GET['nom'];
   // $adresse=$_GET['adresse'];
   // $telephone=$_GET['telephone'];
}
?>
<?php
// //connexion au serveur 
  $host="localhost";
  $user="root";
  $pass="";
  $con=mysqli_connect($host,$user,$pass);
  if(!$con) die("erreur de connexion a mysql !")
?>
<? 
//connexion a la base de donnee !!!;
 $base="web3";
 $db=mysqli_select_db($base);
 if(!$db) die("erreur de connexion a la base de donne !");
?>
<?php
 //mysql_close($con);
?>
<?php  //SEQUENCE COMPLETE POUR UNE BASE;
// $host="localhost";
// $user="root";
// $pass="";
// $base="web3";
// mysql_connect($host,$user,$pass) or die("erreur de connexion a mysql !");
// mysql_select_db($base) or die("erreur de connexion a la base de donne !");
?>
<?php
// $host="localhost";
// $user="root";
// $pass="";
// $base="web3";
// mysqli_connect($host, $user, $pass) or die("erreur de connexion à MySQL");
// mysqli_select_db($base) or die("erreur à la sélection de $base");
//$result= mysql_query("delete from etudiant where id_etudiant='1'");
//echo mysql_affected_rows()." Enregistrements supprimés";
//mysql_close();
?>