<?php
    session_start();
  require 'fonction.php'; 
    $login=$_POST['login'];
    $mdp=$_POST['mdp'];

      $_SESSION['login']=$login;
      $_SESSION['mdp']=$mdp;

 
if (isset($_POST['connexion'])) {
  $login=$_POST['login'];
  $mdp=$_POST['mdp'];
  if (empty($login)|| empty($mdp)) {
    remplir($login,$mdp);
  } 
  else {
    connexion($login,$mdp);
  }
  
} 
else {
  header("location: ../index.php?erreur= veuillez s'authentifier");
}



?>