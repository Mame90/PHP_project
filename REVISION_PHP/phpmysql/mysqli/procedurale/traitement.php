<?php 
	if(isset($_POST["enregistrer"]))
	{
		include("connexion.php");
		$prenom = $_POST["prenom"];
		$nom = $_POST["nom"];
		$adresse = $_POST["adresse"];
		$telephone = $_POST["telephone"];
		$req1="insert into etudiant(id_etudiant,prenom,nom,adresse,telephone)  
		values('"."','".$prenom."','".$nom."','".$adresse."','".$telephone."')";
		if(mysqli_query($con,$req1) === true)
			{
			header("location:listing.php"):
			}
			else
			{
			echo "Echec d'enregistrement";
			}
		$req2="select prenom,nom,adresse,telephone from etudiant";
		if($result=mysqli_query($con,$req2))
		{
			echo "nombre d'enregistrement : ".mysqli_num_rows($result);
		// libération du résultat
		mysqli_free_result($result);
		}
		else
		{
			echo "Erreur selection à la base de données";
		}
	}
?>     
