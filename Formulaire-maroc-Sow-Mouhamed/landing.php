<<?php 
	session_start();
	if (!isset($_SESSION['nom']['prenom']));
		header('Location: projetphp1.php');

		?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bienvenue</title>
</head>
<body>
	<h1>Bonjour tout le monde! <<?php echo $_SESSION['nom']['prenom'] ?></h1>
		
}

	<a href="deconnexion.php" >Deconnexion</a>
</body>
</html>

