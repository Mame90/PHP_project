<form method="post" action="traitement.php">
    <input type="number" name="nombre">
    <input type="submit" name="afficher" value="afficher">
</form>
<?php
if(isset ($_GET["vide"])){
    echo $_GET["vide"];
}
if(isset ($_GET["taille"])){
    echo $_GET["taille"]; // cette expresion (echo $_GET["taille"];) variable me permet de linker au niveau de la page traitement le header (vide & taille)
}
?>
/*    

if condition header("location:form.php ? vide ")//   ce code me permettra de rediriger sur la mm page 

pour la recuperation on recupere tout ce qui est input 
/*