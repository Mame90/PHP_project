<?php
	if(isset($_POST["Enregistrer"]))
		{
		include("connexion.php");
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$adresse = $_POST["email"];
		$req = "INSERT INTO visiteur(nom,prenom,adresse)
				VALUES('"."','".$nom."','".$prenom."','".$adresse."')";
			$result=mysql_query($req);
  	}
  ?>