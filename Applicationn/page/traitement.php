<?php
 if(isset($_GET["valider"]))
 {
     $log=$_GET["login"];
     $pwd=$_GET["motpasse"];
     require ("fonction.php"); //permet  d'inclure la page fonction.php
  
                                  // cet lement me permet  d'appeler la fonction gestion issue au niveau de la 
                            // fonction.php
     gestion($log,$pwd);
 }
 /*
 if(empty($log) || empty ($motpass))
 {
     header("location:index.php?vide=veillez remplire tous les champs!!!");

 }  else{
     $logMinis=strtolower($log);
     $pwdMinis=strtolower($pwd);

 }
 if(($log==admine) && ($pwd==admine))
 {
  */
 //}



?>
