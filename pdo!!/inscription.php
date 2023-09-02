<table border="0">

    <form method=GET action="">
        <tr>
             <td colspan='4'>
                 <?php
                 // recupperation des message d'erreurs s'il ya succes
                 if (isset($_GET['msg']))
                 {
                     echo $_GET['msg'];
                 }
                     // cette instruction me permet de recuperer la valeur  prenom s'il exist   ??pour l'instruction suivante 
                 ?>
        
            <td>Prenom</td><td><input type="text" name="prenom"
            value=<?php
              if(isset($_GET['prenom'])){
                echo $_prenom;
            }else{
                echo "";
            }?>
             ></td>
            <td>Nom</td><td><input type="text" name="nom" 
            value=<?php
              if(isset($_GET['nom'])){
                echo $_nom;
            }else{
                echo "";
            } ?> ></td>
        </tr>
        <tr>
            <td>Adresse</td><td><input type="text" name="adresse" 
            value=<?php
              if(isset($_GET['adresse'])){
                echo $_adresse;
            }else{
                echo "";
            } ?> ></td>
            <td>profils</td>
            <td>
         <select name="profils" style="width:170">
                <option value="administrateur">administrateur</option>
                <option value="secretaire">Secretaire</option>
        </select>

        </tr>
        <tr>
            <td>login</td><td><input type="text" name="login"
            value=<?php
              if(isset($_GET["login"])){
                echo $_login;
            }else{
                echo "";
            } ?> ></td>
            <td>mot de passe</td><td><input type="password" name="mot"
            value=<?php
              if(isset($_GET['mot'])){
                echo $_mot;
            }else{
                echo "";
            } ?>></td>
        </tr>

        <tr>
            <td>confirme mot de passe</td><td><input type="password" name="conf"

            value=<?php
              if(isset($_GET["conf"])){
                echo $_conf;
            }else{
                echo "";
            } ?> ></td>
            <td colspan="2"><td><td><input type="submit" name="inscrire" value="Inscription"/></td>
        </tr>

        <?php
          //recuperation
           
            // verifier si le on a cliquer sur inscription
          if (isset ($_GET["inscrire"])){
              $prenom=$_GET["prenom"];
              $nom=$_GET["nom"];
              $adresse=$_GET["adresse"];
              $profils=$_GET["profils"];
              $login=$_GET["login"];
              $mot=$_GET["mot"];
              $prenom=$_GET["prenom"];
              $con=$_GET["conf"];
              if(empty($prenom) || empty($nom) || empty($adresse) || empty($profils) || empty($login) || empty($mot) ||
              empty($conf) )
              {
                  header("location:inscription.php?prenom=".$prenom."&nom=".$nom."&adresse=".$adresse."&login=".$login."&msg=veuillez remplire tous les champs");

              }
              else{
                  
                  if($mot != $conf){
                    header("location:inscription.php? prenom=".$prenom."nom=".$nom.
                    "adresse=".$adresse."login=".$login."$msg=Les deux mots de passe ne sont pas identiques");
  
                  }
                  //
                  else{
                      //les deux mots de passe sont identiques
                     //  echo "Bon" ;
                  //Verifier si le login est present dans la table compte

                   require "CONNEXION.php";

                    $sel="select login from compte where login='".$login."'";
                    if ($res =$con -> query($sel))
                  {
                      $nb =$res->rowCount();
                      //si nb=1, le compte existe sinon not existe
                      if($nb==1){
                        header("location:inscription.php? prenom=".$prenom."nom=".$nom.
                        "adresse=".$adresse."login=".$login."$msg=le login existe deja");
                        }
                        else{
                            //Enregistrement de la table personne
                             $personne ="insert into personne(idPers,prenom,nom,adresse,profil) 
                             values('"."','".$prenom."','".$nom."','".$adresse."','".$profil."')";
                             if ($res2=$con ->exec($personne))
                             $recId="select max (idpers) as idpers from personne";
                            }
                             {//recuperation de l'identifiant de la personne nouvellement enregister
                        }//fermuture execution requete 
                  }
                    }
        
                  

                }

          }
          ?>