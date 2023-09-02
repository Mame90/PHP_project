<?php
   session_start();
    function somme ($a,$b){
        return $s=$a+$b;
    }
    function soustraction ($a,$b){
        return $s=$a-$b;
    }

    //create compte
       function createCompte($p,$n,$a,$pro,$log,$mot)
       {
           require ("../connexion.php");
           $req ="select login from compte where login='".$log."'";
           if ($result = mysqli_query($con,$req))
           {
               while($info = mysqli_fetch_row($result))
               {
                   $login= $info[0];
                   $_session["login"]=$login;
               }
           }
       if  ($_SESSION["login"] ==$log)
       {
           echo "Le compte existe deja";
           echo $_SESSION["login"];
       }
       else
 