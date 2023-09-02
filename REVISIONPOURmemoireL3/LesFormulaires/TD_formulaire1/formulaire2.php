<form method="get" action="" enctype="file">
<fieldset>
    <legend>Vos coordonnées</legend>
  <table>
    <tr>
        <td>Quel est votre nom ?&nbsp;<input class="form-control" type="text" name="nom"></td>
        <td>Quel est votre prenom ?&nbsp;<input class="form-control" type="text" name="prenom"></td>
        <td>Quel est vore e-mail ?&nbsp;<input type="email" name="email" class="form-control" value="" required="required"></td>
    </tr>    
  </table>  
  </fieldset>  
  <fieldset>
  <legend>Niveau d'étude</legend>
  <table>
    <tr>
        <td>Quel est votre niveau d'étude :</td>
        <td><input class="form-control" type="radio" name="niveau" value="licence">Licence-1
        <input class="form-control" type="radio" name="niveau" >Autres</td>
    </tr>
        <td>Si "Autres", veillez précisez</td><br>
        <td>
            
            <textarea name="niveau" id="input" class="form-control" rows="3" cols="33" value="" placeholder=""></textarea>
            
        </td>
    <tr>
        <td>
            <input class="form-control" type="submit" name="valider" value="valider">
        </td>
    </tr>
  </table>
  </fieldset>

</form>
<?php
if (isset($_REQUEST['valider']))
{
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $niveau=$_GET['niveau'];
}
?>