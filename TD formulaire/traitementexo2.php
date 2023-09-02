


<?php
   if(isset($_GET["envoyer"])){
       if(empty("prenom")|| empty("nom") || empty("datenaissance") || empty("langue") || empty("sexe") || empty("message"))
       header ("locate: formexo2.php?vide= Veillez remplire s'il vous plait les champs manquante");
   }