<!Doctype html>
 <html>
     <head>
        <title>Affichage de bienvenu</title>
     </head>
    <body> 
        
        <?php
    
         echo "bienvenue"
         ?>
         <br>
        <?php 
         // commentaire------ vfsttrt
      $prenom='Mbaye';
      $nom='diop';
      echo $prenom." ".$nom;
 
      ?>
      <?php
      const centre="Diourbel";
      define("Universite","Bambey");
      define("annee","2017");
      $moncentre="centre";
      // echo $moncentre;
      echo Universite;
      echo centre;
      echo constant($moncentre)."<br/>";
      echo __FILE__ ."<br/>"
      defined(Universite);
      ?>
    </body>
 </html>