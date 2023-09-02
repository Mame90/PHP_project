
		<form name="formulaire" method="POST" action="">
			<fieldset>
				<legend>Information</legend>
					<table>
						<tr>
							<td>Prenom</td><td><input type="text" name="prenom" ></td>
						
							<td>Nom</td><td><input type="text" name="nom" ></td></td>
						</tr>
						<tr>
							<td>Adresse</td><td><input type="text" name="adresse" ></td></td>
						
							<td>Profil</td>
              <td>
              <select name="Profil" style="width : 147 px">
                <option value="admin">Administrateur</option>
                <option value="seretaire">secretaire</option>
</select>
</td>
						</tr>
            <tr>
							<td>Login</td><td><input type="text" name="login" ></td>
						
							<td>Pwd</td><td><input type="passwd" name="pwd" ></td></td>
						</tr>
            <tr>
							<td>Confirmation pwd</td><td><input type="pwd" name="conf" ></td></td>
             <td><input type="submit" name= value="Cr&eacute;er compte"></td>					

		
</tr>
					
					
												
					</table>
					
			</fieldset>
		</form>
  if (isset($POST)([""]))