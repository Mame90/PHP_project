<form action="Pays.php" method="post">

Faites votres choiix svp&nbsp;
Senegal:<input type="checkbox" name="Pays[]" value="Senegal"><br/>
France:<input type="checkbox" name="Pays[]" value="France"><br/>
USA:<input type="checkbox" name="Pays[]" value="USA"><br/>
Allemagne:<input type="checkbox" name="Pays[]" value="Allemagne"><br/>
Maroc:<input type="checkbox" name="Pays[]" value="Maroc"><br/><br/>
<input type="submit" name="valider" value="Valider"><br/>
<?php
if(isset($_REQUEST["valider"]))
  $pays=$_POST["pays"];
  foreach($pays as clepays => $p){
      echo $pays[$clepays];
  }
  }
  ?>