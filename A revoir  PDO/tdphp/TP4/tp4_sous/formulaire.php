<!DOCTYPE html>
<html>
    <head>
        <title>tp4 formulaire et session</title>
        <meta charset="utf-8">
    </head>
    <body>

<form method="post" action=" ">
    nombre 1:<input type="number" name="nbre1"><br>
    nombre 2:<input type="number" name="nbre2"><br>
    <input type="submit" name="envoyer" value="<?php 
        if(isset($_GET['id']))
        {
            if($_GET['id']==1)
                echo 'Addition';
            else if($_GET['id']==2)
                echo 'Soustraction';
        }
    ?>">          
</form>

    </body>
</html>




