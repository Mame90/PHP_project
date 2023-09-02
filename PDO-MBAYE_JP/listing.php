<Style>
    #cap{
        font-size: 20px;
        background:grey     ;
        margin-top:50px;
    }
    #tab{
        background:lightblue;
    }
    #a1:hover{ 
        text-decoration:none;
        background-color:aqua;
        color:black;
    }
    #a2:hover{ 
        color:black;
        text-decoration:none;
        background-color:red ;
    }
    .td{
        background:lightgrey;
    }
</Style>
<?php
include "connexion.php";
$req2= "select* from personne";
$result=mysqli_query($con,$req2);
echo "<center>" ;
echo"<table border='2px' id='tab' cellspacing='1' cellpadding='20'>";
echo "<caption id='cap' Align='TOP'>"."La liste des personnes". "</caption>";
echo"<tr>";
echo"<td class='td'>IdPersonne</td><td td class='td'>Prenom</td><td td class='td'>Nom</td>";
echo"<td  class='td'>Adresse</td><td td class='td'>Profil</td><td td class='td'>Action</td>";
//echo"<td class='td'>Login</td><td td class='td'>Mot De Passe</td>";
echo"</tr>";
if ($result)
    { 
      while($res=mysqli_fetch_row($result))
        {
?>
<tr>
<?php for($i=0;$i<5;$i++) {?>
        <td><?php echo $res[$i]?></td>
        <?php }?>
        <td>
            <a  href="update.php?id=<?php echo $res[0];?> " > <button id="a1"> modifier</button></a>
            <a  href=" listing.php?id=<?php echo $res[0];?> "> <button id="a2">supprimer</button></a>
        </td>
    </tr>
    <?php
     }
    }
     echo "</table>";
     echo "</center>";
                if(isset($_GET['id'])){
            $id=$_GET['id']; 
            ?>
              <script type="text/javascript"> let b=confirm("voulez-vous supprimer ce compte?"); </script>
              <script type="text/javascript">//alert(b);</script>
              <script type="text/javascript"> 
               if(b==true){
               <?php 
                   $req3= " delete from compte,personne where compte.idPers=personne.idPers and personne.idPers='.$id.'";
                   //$req4= " delete  from personne where idPers= '.$id'";
                   $resultat=mysqli_query($con,$req3);
                   //$resultat1=mysqli_query($con,$req4);
                   if($resultat ){?>
                   alert("Suppression Réussie");
                       <?php 
                        }
                        else{ ?>
                           alert("Echec de la suppression");
                     <?php
                      }
                      ?>
                       
               }
               else{
                        alert("Suppression Annulée");
               }
            </script>
                   <?php   
                }
        ?>

