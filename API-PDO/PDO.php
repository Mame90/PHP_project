<?php
  try
  {
      $
con=new PDO('mysql host =localhost dbname = web2', ''); // nom base de donnee:web2
  echo "connexion reussie";

  }
    catch(PDOExeption $e)
    {
        die("erreur".$->getMessage());
    }
?>