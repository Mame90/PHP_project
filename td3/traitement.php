<?php
    //on allume les sessions (pour recuperer nos erreur dans dautress pages)
    session_start();

    //on inclut
    require 'fonction.php';
    
    if(isset($_POST['afficher'])){
        //on veriefie si le nombre est saisie
        $nombre =  $_POST['nombre'];
        if(empty($nombre)){ //empty verfie si le champ est vide
            // si oui
            $_SESSION['erreur'] = " champ vide, vueillez remplir un nombre ";
            header("Location: form.php");
            exit();
        }else{
            if($nombre > 12){
                $_SESSION['erreur'] = " le nombre doit être inferieur ou égale à 12 ";
                header("Location: form.php");
                exit();
            }else{
                //affiche les fonctions

                //multiplication
                tableMultiplication($nombre);
                Matrice();
            }
        }
            
    }