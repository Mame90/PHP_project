<?php
  if (isset($_POST["valider"]))
  {
        // recuperration des variables
      $log=$_POST['login'];
      $pwd=$_POST['pwd'];
    
      if(empty($log) || empty($pwd)){
      header("location:connexion.php?vide=Veillez remplire tout les champs!");  
      }  
       else{
           $logMinis=strtolower($log);
           $pwdMinis=strtolower($pwd);
           session_start();
        if (($log==admin) && ($pwd==admin))
        
        {

         $_SESSION['login']=$logMinis;
         $_SESSION['pwd']=$pwdMinis;

            header("location:espace.php?info=VOus etes bien dans votre espaces !");
        }
         else {
        header("location:connexion.php?alert=login et ou\ mot de passe incorrect !");
    }
    }