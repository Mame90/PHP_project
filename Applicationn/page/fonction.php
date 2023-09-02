<?php 
session_start(); // demarage de la session;
function gestion($log,$pwd) {

$_SESSION["login"]=$log;    //creation de la  session 

    if(empty($log) ||empty($pwd))
    {
        header("location:../index.php?vide=veillez remplire tous les champs");
    }
    else
    {
        if(($log=='admine') && ($pwd=='admine'))
        {
            header("location:administration.php");
        }

        else 
        if(($log=='secretaire') && ($pwd=='secretaire'))
        {
            header("location:secretaire.php");  
        }
        else
        {
            header("location: ../index.php?erreur=login et\ ou mot de passe incorrect");
        }
    }
}
?>