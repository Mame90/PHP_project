<?php
 session_start();
 function somme($a,$b){
     return $s=$a+$b;
 }
 
 function soustraction($a,$b){
    return $s=$a-$b;
}

function connexion($a,$b){
    
    $_SESSION['login']=$a;
    if (($a=="Secretaire") && ($b=="Secretaire")) {
        header("location: secretaire.php");
     }
     else if (($a=="Admin") && ($b=="Admin")) {
      header("location: administrateur.php");
   }
    else { 
      header("location: ../index.php?erreur=le login ou le mot de passe est incorrect");
   }
}
function remplir($a,$b){
     {
        header("location: ../index.php?info=veuillez remplir tous les champs");
    }
}
?>