<?php
include("fonction.php");
if(isset($_POST["afficher"])){  //recuperation 
    $nombre=$_POST["nombre"] ;
    if (empty($nombre)){
        header("location: form.php?vide=remplire la zone");
    }
    if($nombre>12){
        header("location:form.php?taille=nombre ne doit pas depasser 12"  );
    }
    multiplication($nombre);
    matrice($nombre, $nombre);
}