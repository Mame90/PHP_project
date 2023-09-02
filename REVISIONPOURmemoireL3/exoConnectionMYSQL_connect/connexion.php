<?php
// $host="localhost";
// $user="root";
// $pass="";
// $con=mysqli_connect($host,$user,$pass);
// if(!$con) die ("Erreur de connexion a la base !");
?>
<?php
// $base="gestion_produit";
// $db=mysqli_select_db($base,'altislife-dev');
// if(!$con) die ("Erreur de connexion a la base");
?>
<?php
// try
// {
//   $con=new PDO('mysql:host=localhost;dbname=gestion_produit','root','');
//   //echo "connexion reussie";
// }
// catch(PDOException $e)
// {
//    die("Erreur : " . $e->getMessage());
// }
?>
<?php
// // connexion avec mysqli version procedurale //
// $host="localhost";   
//  $user="root";
//  $pass="";
//  $base="gestion_produitcd";
//  $con=mysqli_connect($host,$user,$pass,$base) or die ("Erreur de connexion a la base !".mysqli_connect_errno($con));
?>
<?php
// // connexion avec mysqli version oriente  objet //
$host="localhost";   
 $user="root";
 $pass="";
 $base="gestion_produit";
 $con=new mysqli($host,$user,$pass,$base);
 if($con ->connect_errno) die ("Erreur code".$con ->connect_errno.":".$con ->connect_error);
 echo "connexion reussi !"
?>

<?php
$con=new mysqli($host,$user,$pass,$base);
if($con ->connect_errno) die ("Erreur code".$con->connect_errno.":".$con->connect_error);
echo "connexion reussi !"
?>