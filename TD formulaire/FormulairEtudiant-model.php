<!doctype html>
<html lang="fr">
	<head>
		<title>Formulaire</title>
		<meta charset="utf-8"/>
	</head>
  <body>
		<form name="formulaire" method="POST" action="information.html">
			<fieldset>
				<legend>Information</legend>
					<table>
						<tr>
							<td>Nom</td><td><input type="text" name="Nom" placeholder="Nom" /></td>
						</tr>
						<tr>
							<td>Prénom</td><td><input type="text" name="Prénom" placeholder="Prénom" /></td>
						</tr>
						<tr>
							<td>Age</td><td><input type="number" name="Age" placeholder="Age" /></td>
						</tr>
						<tr>
							<td>Sexe</td><td>
							Masculin<input type="radio" name="Sexe" value="Masculin">
							Féminin<input type="radio" name="Sexe" value="Féminin"></td>
						</tr>
						<tr>
							<td>Commentaire</td><td><textarea name="Commentaire" placeholder="Votre commentaire ici" cols="25px" rows="5"></textarea></td>
						</tr>
						<tr>
							<td>Pays</td><td><input type="text" name="Sexe" placeholder="Pays" /></td>
						</tr>
						<tr>
							<td>Région</td><td><input type="text" name="Région" placeholder="Région" /></td>
						</tr>
						<tr>
							<td>Université</td>
							<td><select name="Université">
										<option value="UADB" selected>UADB</option>
										<option value="UGB" >UGB</option>
										<option value="UCAD">UCAD</option>
										<option value="UASZ">UASZ</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Nationnalité</td>
							<td><select name="nationalite">
										<option value="Sénégalaise" selected>Sénégalaise</option>
										<option value="Gambien" >Gambien</option>
										<option value="Malien">Malien</option>
										<option value="Guinéen">Guinéen</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><input type="submit" name="Valider" value="Valider"/></td><td><input type="reset" name="Annuler" value="Annuler"/></td>
						</tr>						
					</table>
					
			</fieldset>
		</form>
  </body>
</html>