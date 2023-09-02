<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
include "connexion.php";
$req="select prenom,nom,adresse,logi from personne,compte where personne.idPers=compte.idpers and personne.idPers='".$id."'";
if($res=mysqli_query($con,$req)){
    while($info=mysqli_fetch_row($res)){
?>
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
	<form method="post" action="">
		<tr>
			<td>Prenom</td><td><input type="text" name="prenom" value="<?php echo $info[0]; ?>"/></td>
			<td>Nom</td><td><input type="text" name="nom" 
				value="<?php echo $info[1]; ?>"/></td>
		</tr>
		<tr>
			<td>Adresse</td><td><input type="text" name="adresse" 
				value="<?php echo $info[2]; ?>"/></td>
            <td>Ancien_mot_de_passe</td><td><input type="password" name="anc" 
				value=""/></td>
			
				
			</td>
		</tr>
		<tr>
			<td>Login</td><td><input type="text" name="login" 
				value="<?php echo $info[3]; ?>"/></td>
			<td>Mot de passe</td><td><input type="password" name="mot" value=""/></td>
		</tr>
		<tr>
			<td>Confirme mot de passe</td><td><input type="password" name="conf" value="" /></td>
			<td colspan="2"><input type="submit" name="inscrire" value="Inscription" /></td>
		</tr>
	</form>
</table>
<?php
    }
}
if(isset($_POST['inscrire'])){
	$pnom=$_POST['prenom'];
	$nom=$_POST['nom'];
	$adresse=$_POST['adresse'];
	$acmot=$_POST['anc'];
	$nvmot=$_POST['mot'];
	$login=$_POST['login'];
	$conf=$_POST['conf'];
	$crp=sha1($nvmot);
	$crp2=Sha1($acmot);
	$req="select pass from compte where idpers='.$id.'";
	if($result=mysqli_query($con,$req)){
		while($don=mysqli_fetch_row($result)){
			$verif=$don[0];
		}
	}
	if(empty($pnom) || empty($nom) || empty($adresse) || empty($acmot) || empty($login) || empty($nvmot) || empty($conf)){
		echo "Veuillez remplir tous les champs";
	}
	else{
		if($crp2!=$verif){
			echo " L'ancien mot de passe donner est faux";
		}
		else{
			if($conf!=$nvmot){
				echo " Veuilez confirmer votre mot de passe";
			}
			else{
				$req=" UPDATE personne,compte SET prenom='.$pnom.', nom='.$nom.',adresse='.$adresse.',logi='.$login.',pass='.$cpr.' WHERE  'personne.idPers'='compte.idpers' and 'personne.idPers'='.$id.';";
				$resu=mysqli_query($con,$req);
					   if($resu){
						   echo "Réussiiiiiiiiii";
					   }

				
			}	
			
		}
	}
}

?>
