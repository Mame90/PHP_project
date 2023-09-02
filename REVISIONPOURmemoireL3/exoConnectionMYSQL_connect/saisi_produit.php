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

   <td>nom_produit&nbsp;&nbsp;&nbsp;&nbsp; <input class="form-control"] type="text" name="nom_produit" value=""></td> 
   
   <td>libelle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="libelle"></td><br>
</tr>
<tr>
  <td>quantite &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantite"></td> 
  <td>date_stock &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date_stock"></td><br> 
  <tr>
    <td>
        <input class="form-control" type="submit" name="valider" value="valider">
    </td>
  </tr>
</table>
</fieldset>
</td>
<?php
if(isset($_REQUEST['valider']))
{
    $nom_produit=$_GET['nom_produit'];
    $libelle=$_GET['libelle'];
    $quantite=$_GET['quantite'];
    $date_stock=$_GET['date_stock'];
if(empty($nom_produit) || empty($libelle) || empty($quantite) || empty($date_stock)){
    header("location:saisi_produit.php?nom_produit=".$nom_produit."&libelle=".$libelle."&quantite=".$libelle."&date_stock=".$date_stock."&msg=veillez remplire tous les champs");
} 
else
   {
   if(isset($nom_produit) && isset($libelle) && isset($quantite) && isset($date_stock)){

    require "connexion.php";

    $produit="insert into produit (id_produit,nom_produit,libelle,quantite,date_stock) values(''""'".$id_produit."',
    '".$nom_produit."','".$libelle."','".$quantite."','".$date_stock."')";
   
}
}
}
// header("location:liste_produit.php");
?>
