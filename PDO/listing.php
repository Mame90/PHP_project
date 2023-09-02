<style type="text/css">
	a{
		text-decoration: none;
	}
</style>
<?php 
//recuperation du message de suppression
	if(isset($_GET['msg']))
	{
		echo $_GET['msg'];
	}
	require("connexion.php");
	$req = "select id_etudiant, prenom, nom, adresse, telephone from etudiant";
	if($result = $con->query($req))
	{
		//echo "Nous avons ".$result->rowCount()." enregistrement(s)";
			echo "<table border='1'>";
				echo "<tr>";
					echo "<td>Identifiant</td><td>Prenom</td><td>Nom</td><td>Adresse</td><td>Telephone</td><td>Action</td>";
				echo "</tr>";
		while($donnee = $result->fetch(PDO::FETCH_ASSOC))
		{
				echo "<tr>";
					echo "<td>".$donnee['id_etudiant']."</td>";
					echo "<td>".$donnee['prenom']."</td>";
					echo "<td>".$donnee['nom']."</td>";
					echo "<td>".$donnee['adresse']."</td>";
					echo "<td>".$donnee['telephone']."</td>";
		?>
					<td><a href="listing.php?id=<?php echo $donnee['id_etudiant']; ?>">delete</a></td>
		<?php			
		
				echo "</tr>";
		}
		echo "</table>";
	}
	//suppression etudiant
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sup ="delete from etudiant where id_etudiant='".$id."'";
		if($resultSup = $con->exec($sup))
		{
			header("location:listing.php?msg=Suppression bien deroulee");
		}
	}
?>