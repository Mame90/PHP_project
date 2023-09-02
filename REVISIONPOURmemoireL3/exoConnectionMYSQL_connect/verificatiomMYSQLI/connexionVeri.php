<?php // connexion version MYSQLI
// host="localhost";   
//  $user="root";
//  $pass="";
//  $base="web3";
//  $con=new mysqli($host,$user,$pass,$base);
//  if($con ->connect_errno) die ("Erreur code".$con ->connect_errno.":".$con ->connect_error);
//  echo "connexion reussi !"
// $con=new mysqli($host,$user,$pass,$base);
// if($con ->connect_errno) die ("Erreur code".$con->connect_errno.":".$con->connect_error);
// echo "connexion reussi !"
try{
    $con= new PDO('mysql:localhost=host;dbname=web3',"root","");
    echo " Connexion reussi";
}
catch(getMessage $e){
    die("Erreur".$e->getMessage());

}
?>


<?php  //   un autre facon de gerer la connexion oriente objet //
// define('User',"root");
// define('Passwd',"");
// define('Server',"localhost");
// define('Base';"web3");
// try{
//     $dsn="mysql:dbname=".Base.";host=".Server;
//     $con= new PDO($dsn;$user,$Passwd)
// }
// catch( getMessage $e){
//     die("erreur ".$e->getMessage());
// }
?>