<?php
// Déclaration d'une variable de type chaîne de caractères
$nom = "John Doe";

// Déclaration d'une variable de type entier
$age = 25;

// Déclaration d'une variable de type booléen
$estEtudiant = true;

// Déclaration d'une variable de type tableau
$couleurs = array("rouge", "vert", "bleu");

// Affichage des valeurs des variables
echo "Nom : " . $nom . "<br>";
echo "Âge : " . $age . "<br>";
echo "Est étudiant : " . ($estEtudiant ? "Oui" : "Non") . "<br>";
echo "Couleurs : ";
foreach ($couleurs as $couleur) {
    echo $couleur . " ";
}
?>
