<?php
  try
  {
      $
con=new PDO('mysql host =localhost dbname = web2', ''); // nom base de donnee: web2
  echo "connexion reussie";
$reql="selet prenom,nom,adresse,telephone from etudiant";
   if ($result=$con->query($reql))
   {
       echo "Nous avons ".$result->rowCount()."enregistrement"   }
  }
    catch(PDOExeption $e)
    {
        die("erreur".$->getMessage());
    }
?