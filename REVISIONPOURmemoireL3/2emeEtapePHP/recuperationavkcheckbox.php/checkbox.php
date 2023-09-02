<form action="../formulaire1.php" method="post">
    Allemagne<input class="form-control" type="checkbox" name="pays[]" value="Allemagne"><br>
    Senegal<input class="form-control" type="checkbox" name="pays[]" value="Senegal"><br>
    Portugal<input class="form-control" type="checkbox" name="pays[]" value="Portugal"><br>
  <input class="form-control" type="submit" name="valider" value="valider">
</form>
<?php
 if (isset($_REQUEST['valider'])){
    $pays=$_get['pays[]'];
    foreach($pays as $pa => $p){
        echo $pays['$pa']."<br>";
    
    }
 }
?>