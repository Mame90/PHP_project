<?php
    if (isset($_POST['connexion'])) {
      $login=$_POST['login'];
      $mdp=$_POST['mdp']; 
    require 'fonction.php'; 
    if (empty($login)|| empty($mdp)) 
    {
      remplir($login,$mdp);
    } 
    else 
    {
    connexion($login,$mdp);
    }
} 
else {
  header("location: ../index.php?erreur= veuillez s'authentifier");
}
?>