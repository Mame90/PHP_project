<?php
	if(isset($_POST["enregistrer"]))
	{
		$p = $_POST["prenom"];
		$n = $_POST["nom"];
		$a = $_POST["adresse"];
		$t = $_POST["telephone"];
		include("connexion.php");
		// lancement de la requête
		$req ="insert into etudiant(id_etudiant,prenom,nom,adresse,telephone) 
		 values('"."','".$p."','".$n."','".$a."','".$t."')";
		 // validation ou execution de la requete
		 if(mysqli_query($con,$req)=== true)
		 {
		 	header("location:listing.php");
		 }
		 else
		 {
		 	header("location:formulaire.php?erreur=Verifie la requete");
		 }
	}
?>