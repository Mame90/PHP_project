<?php $information= array ( 'prenom' => 'Demba', 'nom' => 'Thiam',
 'adresse' => 'Linguere', 'ville' => 'Louga');
foreach($information as $info)
 { 
     echo $info. '<br />';
      } ?> 

<?php $information= array ( 'prenom' => 'Demba', 'nom' => 'Thiam', 'adresse' => 'Linguere', 'ville' => 'Louga');
foreach($information as $cleinfos => $lesinfos) { echo '[' . $cleinfos . '] vaut ' . $lesinfos. '<br />'; } ?>


<?php $information= array ( 'prenom' => 'Demba', 'nom' => 'Thiam', 'adresse' => 'Linguere', 'ville' => 'Louga');
echo '<pre>'; print_r($information); echo '</pre>'; ?>

<?php $information= array ( 'prenom' => 'Demba', 'nom' => 'Thiam', 'adresse' => 'Linguere', 'ville' => 'Louga');
if (array_key_exists('nom', $information)) { echo 'La clé "nom" se trouve dans les coordonnées !'; } if (array_key_exists('quartier', $information)) { echo 'La clé "quartier" se trouve dans les coordonnées !'; } ?>

<?php
$information= array ('Demba','Fatou','Issa','Fallou','Aissatou'); $position = array_search('Issa', $information); echo '"Issa" se trouve en position ' . $position . '<br />'; $position = array_search('Aissatou', $information); echo '"Aissatou" se trouve en position ' . $position;
?>

<?php
$prenom="Demba";
 echo strtolower($prenom)."<br/>"; // pour mettre en minuscule
  echo strtoupper($prenom)."<br/>"; // pour mettre en majuscule 
  echo ucfirst($prenom)."<br/>"; // pour mettre le premier caractère en majuscule
?>

<?php $chaine = 'Cette chaine va etre melangee !'; $chaine = str_shuffle($chaine); echo $chaine; ?>
