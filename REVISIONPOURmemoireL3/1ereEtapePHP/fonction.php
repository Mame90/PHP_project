<?php
$prenom="Demba";
echo strtolower($prenom)."<br/>"; // pour mettre en minuscule
echo strtoupper($prenom)."<br/>"; // pour mettre en majuscule
echo ucfirst($prenom)."<br/>"; // pour mettre le premier caractère en majuscule

$phrase='je veux compter le nombre de phrase';
$longueur=strlen($phrase);
echo 'la phrase compte'.$longueur.'de caracteres'."<br>";
$remplacer=str_replace('b','d','bemba boubou');
echo $remplacer."<br>";
$phrase='je ne suis pas un homme normale!';
$melanger= str_shuffle($phrase);
echo $melanger;
echo 'traitement d\'une fonction'."<br>";
function masomme($a,$b){
    
    $s=$a+$b;
    return 'la somme est '.$s;
} 
 echo  masomme(12,2);
 
?>