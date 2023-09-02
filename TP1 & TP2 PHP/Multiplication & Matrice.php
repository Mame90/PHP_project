<?php /*
function multiplication ($n) {
   echo "<table border 1>";
   for ($i=1; $i<=10; $i++){
    echo "<tr>";
    echo "</td>".$n."</td>";
    echo "</td>".'*'."</td>";
    echo "</td>".$i."</td>";
    echo "</td>"."="."</td>";
    echo "</td> ".$n*$i." </td>"."<br>";
    echo "</tr>";
    echo "</table>";
}
}
multiplication(4);
*/
?>








<?php 
function multiplication($n){
    echo "<table border 2>";
    for($i=1;$i<=10;$i++){
        echo "<tr>";
        echo "<td> ".$n."</td>";
        echo "<td> ".'*'."</td>";
        echo "<td> ".$i."</td>";
        echo "<td> ".'='."</td>";
        echo "<td>".$n*$i."</td>"."<br>";
        echo "</tr>";
        echo "</table>";
    }
    
}
multiplication(6);
?>