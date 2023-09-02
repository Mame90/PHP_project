<?php
//cette page permet de gerer les session ;
session_start();

// cette condition me permet de conditionner l'utilisateur si toutefois il n'entre pas ses  indentifiant commme LOGIN ou mot de PASSE

if(!isset($_SESSION["login"]))
{
header("location:connexion.php?auth=veillez vous authentifier svp");

}  else{
    echo "<p align='right'>Bienvenu ".$_SESSION["login"]." ";
    echo "<a href='deconnexion.php' style ='text-decoration:none'>Deconnexion</a></p>";
}




?>