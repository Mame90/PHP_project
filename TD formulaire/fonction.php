<?php
function multiplication ($n) {
   echo "<table border 1>";
   for ($i=1; $i<=10; $i++){
    echo "<tr>";
    echo "<td>".$n."</td>";
    echo "<td>*</td>";
    echo "<td>".$i."</td>";
    echo "<td>=</td>";
    echo "<td>".$n*$i."</td>";
    echo "</tr>";
   }
    echo "</table>";
}
?>
<?php

function matrice ($n1 ,$n2){
    echo "<table border=1>";
    for ($i=1; $i<=10; $i++){
        echo "<tr>";
        for ($j=1; $j<=10; $j++){
            echo "<td>".$i*$j."</td>";

}
echo "</tr>";
}
echo "</table>";
}