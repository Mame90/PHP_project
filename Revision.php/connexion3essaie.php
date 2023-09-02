<form action="formulaire1.php" method="post"> 
    Choisissez les pays de votre choix :<br/> 
    France: <input type="checkbox" name="pays[]" value="France"><br>

     Sénégal: <input type="checkbox" name="pays[]" value="Sénégal"><br> 

     Allemagne: <input type="checkbox" name="pays[]" value="Allemagne"><br> 

     Usa: <input type="checkbox" name="pays[]" value=« Usa"><br>

      <input type="submit" name="valider" value="valider"> </form>

<?php
 if(isset($_REQUEST["valider"])) 

{
   /*  $pays=$_POST["pays"];
      foreach ($pays as $pa => $p)
      { 
    echo $pays[$pa]."<br/>";
 }
 } 
 ?>
 */
echo $_GET['id'];
 echo $_REQUEST['id']; ?>
