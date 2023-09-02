<?php

$age=10;
for($i=0;$i<110;$i++){
    if ($age>=18){
    echo "vous etes majeur"."<br>";
    break;
}
    else
    echo "vous etes mineur"."<br>";
    break;
}

//$date_du_jour = date("d-m-Y");
$date_du_jour=time();
echo 'Aujourd\'hui nous sommes le '.$date_du_jour;

/* 
tous les deux codes marche bien
$type= 0;
for($i=0;$i<110;$i++){
if ($type >=18) {
echo "Majeur" ;
break;
} elseif ($type <18) {
echo "mineur" ;
break;
}
}
 */
?>