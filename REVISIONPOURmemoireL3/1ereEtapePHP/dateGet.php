<?php
/*
$time = time(); // la date au format système
$date = getdate($time); // récupération des informations de getdate
echo $date['mday'].' - '.$date['mon'].' - '.$date['year'].' il est '.$date['hours'].':'.$date['minutes'];
*/
$time=time();
$date=getdate($time);
echo $date['mday'].'-'.$date['mon'].'-'.$date['year'].'  il est: '.$date['hours'].'-'.$date['minutes'].'-'.$date['seconds']."<br>";
 $prenom= array('Demba','Fatou','Mbaye');
 //echo $prenom[2];

foreach($prenom as $key => $valeur){

    echo $valeur."<br>";


}
echo'---------------------------------------------------------------'."<br>";


$information=array('Prenom'=>'Mbaye','Nom'=>'Diop','Adresse'=>'Keur-Massar');

foreach($information as $info =>$cle){
    echo '['.$info.']'.":".'['.$cle.']'."<br>";
}
if (array_key_exists('Prenom',$information)){
    echo 'la cle prenom existes !!!'."<br>";
}
if (array_key_exists('deve',$information)){
    echo 'existe'."<br>";
}
echo "cette partie permet d\'effectuer des test de verification sur l\'ensemble des valeurs exiatants dans un tableau (array) ";
$information= array ( 'prenom' => 'Demba', 'nom' => 'Thiam', 'adresse' =>
'Linguere', 'ville' => 'Louga');
echo '<pre>';
print_r($information);
echo '</pre>';
//echo $information['Adresse']."<br>";

echo'---------------------------------------------------------------'."<br>";
$information=array('Moustapha','Amadou','Bouba','Mariama');
 for($i=0;$i<4;$i++){
    echo $information[$i].'-'."<br>";

 }
 
 echo'---------------------------------------------------------------'."<br>";
 $information=array('Informaticiens','Management','Techniciens');
  foreach($information as $pre){
    echo $pre."<br>";
  }

  $information= array ('Demba','Fatou','Issa','Fallou','Aissatou');
$position = array_search('Issa', $information);
echo '"Issa" se trouve en position ' . $position . '<br />';
$position = array_search('Aissatou', $information);
echo '"Aissatou" se trouve en position ' . $position;

$tab= array("un"=>array("Demba",1=>"Issa",2=>"Moustapha"),2=>array(1,2,3),array('un','deux','trois'));
foreach($tab as $key ){
    echo $key."<br>";
}











?>