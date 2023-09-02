<form method="POST" action="Traitement.php">
<table>
    <tr>
       <td>Login</td>
       <td><input type="text" name="login"/></td>
    </tr>
        
    <tr>
       <td>Mot de Passe</td>
       <td><input type="password" name="motpasse"/></td>
    </tr>
    <tr>
       <td colspan="2"><input type="submit" name="connexion" value="connexion"/></td>

           </tr>
           </table>
    </form>
    <?php   // Recuperation des messages 
   if(isset($_GET["vide"]))
   {
   $v=$_GET["vide"];
    echo $v;
   }

if(isset($_GET["info"]))
{
$v=$_GET["info"];
echo $v;
}
if(isset($_GET["auth"]))
{
$v=$_GET["auth"];
echo $v;

}

if(isset($_GET["dec"]))
{
$v=$_GET["dec"];
echo $v;

}



      /*A recorriger au niveau de la page connexion.php */
   
    ?>
