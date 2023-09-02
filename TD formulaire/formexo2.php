<form action="traitementexo2.php" method="$_GET" >
 
   <fieldset>
                <tr>
                &emsp;&emsp;&emsp;
                <td>Prenom &emsp;&emsp;<input type="text" name="prenomm" placeholder="Prenom"></td> 
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
              <td>Nom &emsp;&emsp;&emsp;&emsp;<input type="text" name="nom" placeholder="nom"></td>
    
                </tr>
            <br><br>
                <tr>
                &emsp;&emsp;&emsp;<td>Date de Naissance</td>
                <input type="date" name="datenaissance" placeholder="Date_De_Naissance">
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
              <td>Lieu_De_Naissance &emsp;&emsp;&emsp;&emsp;</td><input type="text" name="lieuNaissance" placeholder="Lieu_De_Naissance">
                 </tr>
                 <br><br>
                 <tr>
                 &emsp;&emsp;&emsp;
            <td>Langue</td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <select name="langue"  langue>
                                <option value="OUoloff" selected>OUoloff</option>
                                    <option value=serer>serer</option>
                                    <option value=Toucoulor>Toucoulor</option>
       </select> 
       &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            
       <td>Sexe</td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
       Masculin<input type="radio" name="Sexe" value="Homme">
       Femme <input type="radio" name="Sexe" value="Femme"></td>

                </tr>
                <br><br>  
                <td>Message</td>
                <tr><textarea name="message" placeholder="Votre message S'il vous plait" cols="30" rows="10"></textarea>

                </tr>
                <br><br>
                <button><input type="submit" name="envoyer" value="Envoyer"></button>
   </fieldset>
   <?php
     if(isset($_GET["vide"])){
         echo $_GET["vide"];
     }
     ?>