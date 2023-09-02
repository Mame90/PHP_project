<table>
	<tr>
		<td colspan="4">
			<?php
			//récupération des messages d'erreurs et succes
			if(isset($_GET['msg']))
			{
				echo $_GET['msg'];
			}
			?>
		</td>
	</tr>
	<form method="GET" action="">
		<tr>
			<td>Prenom</td><td><input type="text" name="prenom" value="<?php 
			if(isset($_GET['prenom']))
			{
				echo $_GET['prenom'];
			}
			else
			{
				echo '';
			}
			?>"/></td>
			<td>Nom</td><td><input type="text" name="nom" 
				value="<?php 
			if(isset($_GET['nom']))
			{
				echo $_GET['nom'];
			}
			else
			{
				echo '';
			}
			?>"/></td>
		</tr>
		<tr>
			<td>Adresse</td><td><input type="text" name="adresse" 
				value="<?php 
			if(isset($_GET['adresse']))
			{
				echo $_GET['adresse'];
			}
			else
			{
				echo '';
			}
			?>"/></td>
			<td>Profil</td>
			<td>
				<select name="profil" style="width:170">
					<option value="admin">Administrateur</option>
					<option value="secretaire">Secretaire</option>
				</select>	
			</td>
		</tr>
		<tr>
			<td>Login</td><td><input type="text" name="login" 
				value="<?php 
			if(isset($_GET['login']))
			{
				echo $_GET['login'];
			}
			else
			{
				echo '';
			}
			?>"/></td>
			<td>Mot de passe</td><td><input type="password" name="mot"/></td>
		</tr>
		<tr>
			<td>Confirme mot de passe</td><td><input type="password" name="conf" /></td>
			<td colspan="2"><input type="submit" name="inscrire" value="Inscription" /></td>
		</tr>
	</form>
</table>
<?php
	// tester si on a cliqué sur le bonton inscrire
	if(isset($_GET['inscrire']))
	{
		//récupération des données
		$prenom = $_GET['prenom'];
		$nom = $_GET['nom'];
		$adresse = $_GET['adresse'];
		$profil = $_GET['profil'];
		$login = $_GET['login'];
		$mot = $_GET['mot'];
		$conf = $_GET['conf'];
		//crypter mot de passe
		$motCrypte = sha1($mot);
		//tester si tous les champs sont bien remplis
		if(empty($prenom) || empty($nom) || empty($adresse) || empty($profil) || empty($login) || empty($mot) || empty($conf))
		{
			header('location:inscription.php?prenom='.$prenom.'&nom='.$nom.'&adresse='.$adresse.'&login='.$login.'&msg=Veuillez remplir tous les champs');
		}
		else
		{
			//vérifier si les deux mots de passe sont identiques
			if($mot != $conf)
			{
				header('location:inscription.php?prenom='.$prenom.'&nom='.$nom.'&adresse='.$adresse.'&login='.$login.'&msg=Les deux mots de passe ne sont pas identiques');	
			}
			else
			//les deux mots de passe sont identiques
			{
				//vérifier si le login est présent dans la table compte
				require 'connexion.php';
				$sel = "select login from compte where login='".$login."'";
				if($res = $con->query($sel))
				{
					$nb = $res->rowCount();
					//si nb =1, le compte existe sinon 0 not existe
					if($nb==1)
					{
						header('location:inscription.php?prenom='.$prenom.'&nom='.$nom.'&adresse='.$adresse.'&login='.$login.'&msg=Le login existe deja');
					}
					//le compte n'existe pas
					else
					{
						//enregistrement dans la table personne
						$personne = "insert into personne values('"."','".$prenom."','".$nom."','".$adresse."','".$profil."')";
						if($res2 = $con->exec($personne))
						{
							//récupération de l'identifiant de la personne nouvellement enregistré
							$recId="select max(idPers) as idPers from personne";
							if($res3 = $con->query($recId))
							{
								while ($info = $res3->fetch(PDO::FETCH_NUM)) {
									$id = $info[0];
									//insertion dans la table compte
									$compte ="insert into compte values('".$login."','".$motCrypte."','".$id."')";
									if($res4 = $con->exec($compte))
									{
										header('location:index.php');
									}
								}
							}
						}
						else
						{
							header('location:inscription.php?prenom='.$prenom.'&nom='.$nom.'&adresse='.$adresse.'&login='.$login.'&msg=Erreur d\'enregistrement');
						}
					} // fermeture compte n'existe pas
				}//fermeture exécution requete vérification compte
			} // fermeture des deux mots de passe identiques
		} // fermeture else tous les champs bien remplis
	} // fermeture vérifier si on a cliqué sur le bonton
?>
