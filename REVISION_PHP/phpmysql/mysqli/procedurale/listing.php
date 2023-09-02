<?php
	include("connexion.php");
	$req2="select id_etudiant,prenom,nom,adresse,telephone from etudiant";
	$result=mysqli_query($con,$req2);
	echo '<table border="1">';
	echo "<tr>";
	echo "<td>Prenom</td><td>Nom</td>";
	echo "<td>Adresse</td><td>Telephone</td><td>Action</td>";
	echo "</tr>";
	while($ligne = mysqli_fetch_row($result))
	{
	?>
		<tr>
			<td><?php echo $ligne["1"]; ?></td>
			<td><?php echo $ligne["2"]; ?></td>
			<td><?php echo $ligne["3"]; ?></td>
			<td><?php echo $ligne["4"]; ?></td>
			<td>
			<a href="update.php?id=<?php echo $ligne[0]; ?>">modifier</a> 
			&nbsp; 
			<a href="delete.php?id=<?php echo $ligne[0]; ?>">supprimer</a></td>
		</tr>
	<?php
	}
	echo "</table>";
?>