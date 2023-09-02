<?php 
$nombre=$_POST['nombre'];  //cette instruction me permettra de recuperer la vseur saisi dans le formulaire. 
 echo "<table  border=1px >" ;
  for($i=1;$i<=$nombre;$i++){
        echo "<tr>";
      for($j=1;$j<=$nombre;$j++){
             echo "<td>".$i*$j."</td>";
  }
  echo "<tr>";
}
echo "</table>";
?>