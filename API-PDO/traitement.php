<?php 
require("connexion.php")
$reql="selet idetudiant,prenom,nom,adresse,telephone from etudiant";
   if ($result=$con->query($reql))
   {
       echo "Nous avons ".$result->rowCount()."enregistrement(s)" ;

       echo "<table> border='1'>";
echo "<tr>";
echo "<td> Prenom</td><td>Nom</td><td>Adresse</td><td>Telephone</td>
echo </tr>

       while ($donnee= $result-> fetch(PDO:: FETCH_ASSOC))
       {
//echo $donnee->adresse. " " ;
echo "<tr>";
echo "<td>".$donnee['idetudiant']."</td>";
echo "<td>".$donnee['Prenom']."</td>";
echo "<td>".$donnee['Nom']."</td>";
echo "<td>".$donnee['Adresse']."</td>";
echo "<td>".$donnee['telephone']."</td>";
echo '<td><a href="listing.php?id=.$donnee['idetudiant']">delete</a></td>';
?>
      } 
     
  }
  ?>