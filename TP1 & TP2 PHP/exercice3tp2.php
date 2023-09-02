<?php
$tab = array(
    'uadb10'=> array('prenom'=>'fallou', 'nom'=>'diop','ville'=>'linguere','age'=>'20'),
    'uadb20'=> array('prenom'=>'fatou', 'nom'=>'fall','ville'=>'thies','age'=>'21'),
    'uadb30'=> array('prenom'=>'khadim', 'nom'=>'sarr','ville'=>'kaolack','age'=>'22'),
);
foreach($tab as $key=>$val){
    echo "<b>".$key." :</b>"; echo "<br>";
    foreach($val as $k=>$v){
        echo $k.":".$v;echo "<br>";
    }
}