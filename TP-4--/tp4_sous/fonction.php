<?php
 session_start();

 function somme($a,$b){
     return $s=$a+$b;
 }
 
 function soustraction($a,$b){
    return $s=$a-$b;
}
//création compte
function creationCompte($p, $n, $a, $pro, $log, $mot)
{
  require ("../connexion.php");
  $req ="select login from compte where login ='".$log."'";
  if($result = mysqli_query($con,$req))
  {
    while($info = mysqli_fetch_row($result))
    {
      $login = $info[0];
      $_SESSION["login"]= $login;
    }
  }
  if($_SESSION["login"] == $log)
  {
    echo "Le compte existe deja ";
    echo $_SESSION["login"];
  }
  else
  {
    // inserer dans la table personne
      $insPers ="insert into personne(idPers, prenom, nom, adresse, profil)
                values('"."','".$p."','".$n."','".$a."','".$pro."')";
      if($resP = mysqli_query($con,$insPers))
      {
        // récuperation du dernier identifiant de la  personne
        $lastID = "select max(idPers) as idPers from personne";
        if($rli = mysqli_query($con,$lastID))
        {
          while($id = mysqli_fetch_row($rli))
          {
            $idPers =  $id["0"];
            //crypter le mot de passe
            $motCrypte = sha1($mot);
            // inserer dans la table compte
            $insComp = "insert into compte values('".$log."','".$motCrypte."','".$idPers."')";
             if($rcomp = mysqli_query($con,$insComp))
             {
              echo "Compte bien enregistrer";
             }
          }
        }
      }
      else
      {
        echo "ko";
      }
  }
}
//connexion
function connexion($a,$b){
    require ("../connexion.php");
    $mc = sha1($b);
    $req ="select profil from compte c, personne p where 
           p.idPers = c.idPers and login='".$a."' and motpasse='".$mc."' ";
    if($rs = mysqli_query($con,$req))
    {
      while($info = mysqli_fetch_row($rs))
      {
        $pro = $info["0"];
        $_SESSION["profil"] = $pro;
      }
    }
    if ($_SESSION["profil"]=="secretaire") {
        header("location: secretaire.php");
     }
     else if ( $_SESSION["profil"] =="admin") {
      header("location: administrateur.php");
   }
    else { 
      echo  $_SESSION["profil"] ;
      //header("location: ../index.php?erreur=le login ou le mot de passe est incorrect");
   }
}
function remplir($a,$b){
     {
        header("location: ../index.php?info=veuillez remplir tous les champs");
    }
}
?>