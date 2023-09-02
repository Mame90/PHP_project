<!doctype html>
 <html>
    <head>
        <title>Formulaire</title>
    </head>
    <body>
        <form action="formulaire1.php" method="get">       
        Nom  <input  type="text" name="nom"><br><br>
        Email<input type="text" name="email"><br>
        <input  type="submit" name="valider" value="valider">
        </form>

    </body>
    <?php
      if(isset($_REQUEST['valider'])){
        $user=$_get['nom'];
    $email=$_REQUEST['email'];
    
    if(isset($user) && (isset($email))){
//echo 'le username'.$_get['nom'];
//echo 'l\'email'.$_get['email'];
    }
}
    ?>
 </html>

