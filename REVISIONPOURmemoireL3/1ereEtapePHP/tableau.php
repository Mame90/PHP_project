<?php
$information=array('matricule'=>'12420DeES','prenom'=>'Mbaye','Nom'=>'Diop','Telephone'=>'76-234-32-54');
foreach($information as $key=> $valeur){
 echo $key.'-'.$valeur."<br>";   
}
echo "<pre>";
print_r($information);
echo "</pre>";
if (array_key_exists('matricule',$information)){
    echo 'matricule existe';
}
if(in_array('Diopggg',$information)){
    echo 'la valeur existe';
}

?>