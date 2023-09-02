<?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
} else{
    echo "";
}
?>
<body>
     
  

<form method="GET" action="">
<fieldset>
    <legend>Insertion-Des-Produits</Insertion-Des-Produits></legend>
 <table style=width: 20px;> 
 <tr>

   <td>Prenom&nbsp;&nbsp;&nbsp;&nbsp; <input class="form-control"] type="text" name="prenom" value=""></td> 
   
   <td>Nom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nom"></td><br>
</tr>
<tr>
  <td>Adresse &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="adresse"></td> 
  <td>Telephone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="telephone"></td><br> 
  <tr>
    <td>
        <input class="form-control" type="submit" name="valider" value="valider">
    </td>
  </tr>
</table>
</fieldset>
</td>

<?php 
// $con=mysqli_connect("localhost","root","","web3") or die ("Erreur connexion " . 
// mysqli_connect_errno($con));
require "connexionVeri.php";
$req1="insert into  etudiant(id_etudiant,prenom,nom,adresse,telephone) 
values('.','$prenom','$nom','$adresse')";
if($con->query($req1) === true)
{
echo "Enregistrement bien reussi";
}
else
{
echo "Echec d'enregistrement";
}
$req2="select prenom,nom,adresse,telephone from etudiant";
if($result=$con->query($req2)){

{while($row=$result->fetch(PDO::FETCH_ASSOC))
    {
    echo $row['prenom'] ." ".$row['nom']." ".$row['adresse']." ".$row['telephone']."<br/>";
    }
    
//echo "nombre d'enregistrement : ".mysqli_num_rows($result);
// libération du résultat
//mysqli_free_result($result);
}
}
else
{
echo "Erreur selection à la base de données";
}
?>