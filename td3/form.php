<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .form{
                border: 3px solid;
                padding : 50px;
                border-radius: 15px;
            }
            #nombre{
                width : 80%;
                border-radius: 7px;
            }
            #nombre::selection{
                
                border: 1px ;
                border-color : #2196f3;
            }
            .afficher{
                margin-top: 15px;
                width:80px;
                height: auto;
                background-color: green;
            }
            /* factultatif */
            .danger{    
                color: white;
                background-color: red;
                height: 50px;
                width: auto;
                text-align: center;
                margin-bottom: 10px;
                border-radius: 7px;
            }
            .danger p{
                padding: 15px;
            }

        </style>
    </head>
    <body> 
        <?php

            if(isset($_SESSION['erreur']))
               // echo '<div class="danger"> <p>' 
                echo " ". $_SESSION['erreur']
                // .'</p> </div>'; //ici c'esst $_session['erreur'] seulement


                //on detruit les sessions pour pouvoir en creer dautres
           // session_destroy();
        ?>
        <form class="form" method="post" action="traitement.php">
   
            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre"/></br>
            <input type="submit" class="afficher" name="afficher" value="Afficher"/>

            
        </form>
    </body>
</html>