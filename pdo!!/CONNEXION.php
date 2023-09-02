<?php
try{
    $con= new PDO("mysql:host=localhost;dbname=application","root","");
    //echo "connexion reussie";

}
catch (PDOExeption $e)
{
    die ("Erreur: ".$e->getMessage());
}