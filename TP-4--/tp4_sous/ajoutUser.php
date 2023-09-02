<?php
	if(isset($_GET["msg"]))
	{
		echo $_GET["msg"];
	}
?>
<table cellspacing="10px">
	<form method="post" action="">
    <tr>
    	<td>Prenom</td><td><input type="text" name="prenom"></td>
    	<td>Nom</td><td><input type="text" name="nom"></td>
    </tr>
    <tr>
    	<td>Adresse</td><td><input type="text" name="adresse"></td>
    	<td>Profil</td>
    	<td>
    		<select name="profil" style="width: 147px">
    			<option value="admin">Administrateur</option>
    			<option value="secretaire">Secretaire</option>
    		</select>
    	</td>
    </tr>
    <tr>
    	<td>Login</td><td><input type="text" name="login"></td>
    	<td>Mot de passe</td><td><input type="password" name="mot"></td>
    </tr>
    <tr>
    	<td>Confirme mot de passe</td><td><input type="password" name="conf"></td>
    	<td><input type="submit" name="envoyer" value="Cr&eacute;er compte"></td>
    </tr>    
</form>
<?php
	if(isset($_POST["envoyer"]))
	{
		$pre = $_POST["prenom"];
		$nm = $_POST["nom"];
		$adr = $_POST["adresse"];
		$pro = $_POST["profil"];
		$login = $_POST["login"];
		$mot = $_POST["mot"];
		$conf = $_POST["conf"];
		if($mot != $conf)
		{
			header("location:ajoutUser.php?msg=Les deux mots de passe ne sont pas identiques");
		}
		else
		{
			require("fonction.php");

			creationCompte($pre,$nm,$adr,$pro,$login,$mot);
		}
	}
?>