<style type="text/css">
a
{
	text-decoration: none;
}
a:hover
{
	color:#00CC99;
	font-size: 15px;
	font-family: arial;
}
</style>
<?php
require("connexion.php");
$reqList = "select * from etudiant";
$res = mysqli_query($con,$reqList);
?>
<table border="1">
	<tr>
		<td>Prenom</td><td>Nom</td><td>Adresse</td><td>Telephone</td><td>Action</td>
	</tr>
<?php
while($list = mysqli_fetch_row($res))
{
	echo "<tr>";
		echo "<td>".$list[1]."</td>";
		echo "<td>".$list[2]."</td>";
		echo "<td>".$list[3]."</td>";
		echo "<td>".$list[4]."</td>";
		echo "<td>";
		?>
		<a href="formulaire.php?id=<?php echo $list[0]; ?>">modifier</a> 
		&nbsp; 
		<a href="listing.php?id=<?php echo $list[0]; ?>">supprimer</a>
	    </td>
		<?php
	echo "</tr>";
}
echo "</table>";
// partie supprimer
if(isset($_GET["id"]))
{
	$id = $_GET["id"];
	$del = "delete from etudiant where id_etudiant='".$id."'";
	if(mysqli_query($con,$del) === true)
	{
		echo "Suppression bien reussie";
	}
	else
	{
		echo "Echec de suppression";
	}
}
?>



















