<!DOCTYPE html>
<html>
    <head>
        <title>tp4 formulaire et session</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>choisir l'operation a faire </h2>
        <a href="secretaire.php?id=1">Calculer addition</a><br>
        <a href="secretaire.php?id=2">Calculer soustraction</a><br>
        <a href="../index.php?deconnexion=deconnexion reuissie">Deconnexion</a><br><br>
        <?php
            require 'fonction.php';
         //session_start();
         echo "bienvenue ".$_SESSION['login'];
         
        
                if (isset($_GET['id']) == 1 || isset($_GET['id']) == 2 ) {
        ?>             
        <form method="post" action="secretaire.php">
            nombre 1:<input type="number" name="nbre1"><br>
            nombre 2:<input type="number" name="nbre2"><br>
            
            <?php
             $nbre1=$_POST['$nbre1'];
             $nbre2=$_POST['$nbre2'];
                }
                if (isset($_GET['id']) == 1 ) {
                    echo '<input type="submit" name="calcul" value="Addition">';
                }
                else if (isset($_GET['id']) == 2 ) {
                    echo '<input type="submit" name="calcul" value="Soustraction">';
                }
                // recuperation pour calculer
                if (isset($_POST['calcul']) && $_POST['calcul'] == "Addition" )
                {
                    echo "la soustraction ".somme($nbre1,$nbre2);
                } 
                if (isset($_POST['calcul']) && $_POST['calcul'] == "Soustraction" )
                {
                    echo "la soustraction ".soustraction($nbre1,$nbre2);
                }  
        ?>           
        </form>
    </body>
</html>
