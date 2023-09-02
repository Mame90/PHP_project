<?php

if(isset($_POST['bouton_valider']))
{ 
    if(!empty($_POST['email']) AND !empty($_POST['mdp']))
    {
        
        $Email = htmlspecialchars($_POST['email']);
        $Matricule = htmlspecialchars($_POST['mdp']);
        $erreur = "";  
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Univert";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error)
        {
            die ("Erreur de connection au server".$conn->connect_error);
        }
        $sql = "SELECT * FROM employes WHERE email='$Email' AND Matricule='$Matricule'";
        $result = $conn->query($sql);
            if($result->num_rows > 0)
            {
                header('location:employe.php');
            }
            else
            {
                $erreur = "Email ou matricule incorrecte !";
            }
    }
}

?>
<?php
$nomErr = $motErr = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST['email']))
        {
            $nomErr ="Veillez saisir le nom d'utilisateur";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="connecte.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
</head>
<body>
    <section>
        <h1>Authentifiez vous !</h1>
        <?php
            if(isset($erreur))
            {
                echo "<p class='erreur'>".$erreur."</p>";
            }
        ?>
        <form action="" method="POST">
            <label>Email</label>
            <input type="text" name="email" autocomplete="off">
            <label>Matricule</label>
            <input type="password" name="mdp" autocomplete="off">
            <input type="submit" value="valider" name="bouton_valider">
        </form>
    </section>
</body>
</html>