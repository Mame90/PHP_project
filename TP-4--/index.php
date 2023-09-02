<!DOCTYPE html>
<html>
    <head>
        <title>tp4 formulaire et session</title>
        <meta charset="utf-8">
        <style>
            form{
                border: 5px solid blue;
                width: 50%;
                margin: auto;
                background-color: lightgray;
                padding: 10px;
            }
            h3{
                text-align: center;
            }
            #conexion{
                position: relative;
                
                left: 75%;
                border: 2px solid blue;
                background-color: lightblue;
                width: 25%;
            }
            input{
                border: 3px solid blue;
                margin: 5px 10px 5px 5px;
                display: inline-block;
                border-radius: 10px;
                height: 30px;
                width: 50%;
            }
        </style>
    </head>
    <body>
        <form method="post" action="tp4_sous/traitement.php">
            <h3>Page d'authentification</h3>
            votre login:<input type="text" name="login"><br>
            mot de passe:<input type="password" name="mdp"><br>
            <input type="submit" id="conexion" name="connexion" value="connexion">          
        </form>
        <?php
            if (!isset($_GET['erreur'])) {
                echo " ";
            }
            else{
                echo $_GET['erreur'];
            }
            if (isset($_GET['deconnexion'])) {
                echo $_GET['deconnexion'];
            }
            if (isset($_GET['info'])) {
                echo $_GET['info'];
            }

        ?>

    </body>
</html>