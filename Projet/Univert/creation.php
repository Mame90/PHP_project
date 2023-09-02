<?php

    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "univert";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error)
    {
        die ("Erreur de connection au server".$conn->connect_error);
    }
    /*
    $sql = "CREATE TABLE employes(matricule VARCHAR(10) PRIMARY KEY, prenom VARCHAR(20) NOT NULL, nom VARCHAR(20) NOT NULL, 
    date_lieu_naissance VARCHAR(70) NOT NULL, adresse VARCHAR(20) NOT NULL, tel INT(10) NOT NULL, 
    email VARCHAR(70) NOT NULL, situation_matri VARCHAR(20) NOT NULL, genre VARCHAR(10) NOT NULL, 
    statut VARCHAR(20) NOT NULL, fonction VARCHAR(20) NOT NULL, salaire INT(10) NOT NULL, date_entree DATE NOT NULL, 
    presence VARCHAR(20) NOT NULL, cv VARCHAR(90) NOT NULL, photo VARCHAR(90))";
    if($conn->query($sql)===TRUE)
    {
        echo "La table ate creee avec succes";
    }
    else
    {
        echo "Erreur de creation de la table".$conn->error;
    }
    */
    $sql = "CREATE TABLE candidature(id_candid INT(6) AUTO_INCREMENT PRIMARY KEY, prenom VARCHAR(20), nom VARCHAR(20), adresse VARCHAR(20), 
    tel INT(10), email VARCHAR(70), genre VARCHAR(10), statut VARCHAR(10), emploi VARCHAR(50), cv VARCHAR(90))";
    if($conn->query($sql)===TRUE)
    {
        echo "La table ate creee avec succes";
    }
    else
    {
        echo "Erreur de creation de la table".$conn->error;
    }

       
?>