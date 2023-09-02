<form method="GET" action="page/traitement.php" >
<tr>
&emsp;&emsp;&emsp;
  <td colspan="2">Login</td>
  <td><input type="text" name="login"/></td>&emsp;
</tr>
<br><br>
<tr>
  <td colspan="2">Mot de passe</td>
  <td><input type="password" name="motpasse"></td>
</tr>
<br><br>

<tr>
&emsp;&emsp;
  <td colspan="2"></td>
  <td><input type="submit" name="valider" value="Valider"/></td>
</tr>

<?php
// une application permettant de gere le login et le mot de pass d'un administrateur,la page indiquerq que le mot de passe 
//ou le login si jMAIS le code est invalide
  // Recuperation des messages 
if(isset($_GET["vide"]))
{
$v=$_GET["vide"];
 echo $v;
}
?>
<?php
$v=$_GET["erreur"];
echo $v;
?>