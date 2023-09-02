<?php
                                                  //verifier si l'utilisateur existe
if(isset($_POST["connexion"]))
{  
     // recuperation de valeur 
    $log = $_POST["login"];
    $pwd = $_POST["motpasse"];
    if(empty($log) || empty($pwd))
    {
                                                //echo "Au moins un des champs est vide";
    header("location:connexion.php?vide=Au moins un des champs est vide");
    }
     else{
                                                // echo "Tous les champs sont remplis "; 
                                                //verification du logijn  et du mot de passe
   $logMinis=strtolower($log);
   $pwdMinis=strtolower($pwd);

   if ($log=="admin" && $pwd=="admin" )
   {
         // echo "Information correct";   ctd verifier si les information sont corrects  
        //demarrAGE D'UNE SESSION
 session_start();         
          //sauvegardeer les donnees dans la sesion             //Les sessions  permet le sauvegarde des informations       
 $_SESSION["login"] = $logMinis;
 $_SESSION["motpasse"] = $pwdMinis;
header("location:espace.php");
   } 
    else{
       header("location:connexion.php?info=login et/ou mot de passe incorrect");
   }  

}

}
    else{
   // echo "je suis a l'interieur";
   header("location:connexion.php?auth=veillez vous authentifier svp!!!");
        }

?>