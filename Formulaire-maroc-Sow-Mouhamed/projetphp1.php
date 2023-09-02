<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>TOUJOURS PLUS FORT</title>	
	</head>
<body>
	<h1 style="background-color:green;color: white ;"><marquee behavior="altrenate" direction= "right" scrollamont= "5">La création de ma site web composé que des formulaires</marquee></h1>
//fichier_json.php inserer dans action pour faire fonctionner le fichier json
//?= $_SERVER['PHP_SELF'] ?>" On i'inserer dans action pour faire fonctionner le fichier lui meme
			<form method="POST" action="<fichier_json.php >
				<fieldset>
					<legend style="color:white; background-color: green;">
						ma premiere formulaire
					</legend>
						 <center><h2> Remplir le formulaire </h2></center>
				<table>
					<tbody>
						<tr>
							<td style="color:blue;">
								nom:</td><td>&nbsp;<input type="text" name="nom"><br>
							</td>
						</tr>
						<tr>
							<td style="color:blue;">
								prenom:</td><td>&nbsp;<input type="text" name="prenom"><br>
							</td>
						</tr>
						<td style="color:blue;">
							Email:</td><td>&nbsp;<input type="email" name="email"><br>
							</td>
						</tr>
						<tr>
							<td style="color:blue;">
							mot de passe:</td><td>&nbsp;<input type="password" name="password" pattern="^(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.[#-_\$\^\.@]).$"><br>
							</td>
						</tr>
						    <td style="color:blue;">
							Confirmer le mot de passe:</td><td>&nbsp;<input type="password" name="password_confirmation"><br>
							</td>	
						<tr>
							<td>
								<input type="submit" value="valider" name="">
								<input type="reset" value="supprimer" name="">
							</td>
						</tr>
					</tbody>
				</table>
			</fieldset>
		</form>
		<?php
	if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && $_POST['password'] != null && isset($_POST['password_confirmation'])){
			$nom=$_POST["nom"];
			$prenom=$_POST["prenom"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			$password_confirmation=$_POST["password_confirmation"];
			if($password != $password_confirmation){
				echo "erreur : les mots de passe ne sont pas identiques";
			} 
			else {
				$connexion = mysqli_connect("localhost", "root", "", "serie_7");
				if($connexion){
					$query = mysqli_query($connexion,"insert into personne (email, nom, prenom, password) values ('".$email."','".$nom."','".$prenom."','".$password."')");
						if($query){
							echo "Les donnees sont bien enregistrees";
						}
						else{
							echo "Erreur d'insertion";
						}
				}
				else {
					echo "Probleme de connexion";
				}
			}
			// mysql_free_resultat($resultat)
			mysqli_close($connexion);
		}
	?>
</body>
</html>