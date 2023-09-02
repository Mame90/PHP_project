<!DOCTYPE html>
<html>
    <head>
        <title>tp4 formulaire et session</title>
        <meta charset="utf-8">
    </head>
    <body>
    <h2>choisir l'operation a faire </h2>
            <?php 
            require 'fonction.php';  
            if(!isset($_SESSION["login"]))
            {
                header("location:../index.php?auth=Veuillez s'authentifier d'abord");
            }
            else
            { 
            ?>
            <a href="administrateur.php?id=1">Calculer addition</a>
            <a href="administrateur.php?id=2">Calculer soustraction</a>
            <a href="../deconnexion.php?deconnexion=deconnexion reuissie">Deconnexion</a>
            <?php echo "bienvenue ".$_SESSION['login']; ?>
            <br><br>
            <?php
            
             
            if(isset($_GET['id'])) 
            {
                include("formulaire.php");
                if(isset($_POST["envoyer"]))
                {
                    $nb1 = $_POST["nbre1"];
                    $nb2 = $_POST["nbre2"];
                    if($_POST["envoyer"]=="Addition")
                        echo "La somme de ".$nb1." et de ".$nb2." donne ".somme($nb1,$nb2);
                    else if($_POST["envoyer"]=="Soustraction")
                      echo "La difference de ".$nb1." et de ".$nb2." donne ".soustraction($nb1,$nb2);
                }
            }
        }
            ?>
    </body>
</html>