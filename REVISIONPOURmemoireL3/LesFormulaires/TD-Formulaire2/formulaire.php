<body>
     
  

<form method="GET" action="recuperation.php">
<fieldset>
    <legend>Information</legend>
 <table style=width: 20px;> 
 <tr>

   <td>Prenom &nbsp;&nbsp;&nbsp;&nbsp; <input class="form-control"] type="text" name="prenom" value=""></td> 
   
   <td>Sexe </td>
   <td>   
    M:<input type="radio" name="sexe" value="masculin" >F:<input type="radio" name="sexe" value="feminin">

</td>
    </tr>
    <tr>
        <td>Nom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-control" type="text" name="nom"></td>
        <td>Langue</td>
        <td>
            <select name="langue">
                <option value="Diola" selected="Diola">Diola</option>
                <option value="wolof">Wolof</option>
                <option value="Sererre">Sererre</option>
                <option value="Bambara">Bambara</option>
                <option value="Manjak">Manjak</option>
                <option value="Peul">Peul</option>

            </select>
        </td>
    </tr>
    <tr>
    
        <td>Adresse&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-control" type="text" name="adresse"></td>
       <td>Fruits</td>
   </tr>
   <tr>
    <td>Telephone&nbsp;<input class="form-control" type="number" name="telephone"></td>
   <td>
        Orange<input class="form-control" type="checkbox" name="fruit" value="orange">
       Mangue<input class="form-control" type="checkbox" name="fruit" value="mangue">
       </td>
   </tr>
   <tr>
    <td>
   Email&nbsp;&nbsp;&nbsp;&nbsp; <input type="email" name="email" class="form-control" value="" required="required">
    </td>
    <td>Banane<input class="form-control" type="checkbox" name="fruit" value="Banane"></td>
</tr>

<tr>
    <td><button><input class="form-control" type="submit" name="valider" value="valider"></button></td>
    <td><button><input type="reset" value="Annuler"></button></td>
</tr>

 </table>
  </form>
  </fieldset>
</body>