<?php
try{
    $con= new PDO("mysql:host=localhost;dbname=BB_sco","root","");
}
catch(PDOExeption $e)
{
    die ("Erreur de connexion". $e-> getMessage());
}

?>


<?php

 if (isset($_POST["Enregister"])){
$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$email=$_GET["email"];
$nomPhoto=$_FILES["photo"]["name"];
$files_tmp_name=$_FILES["photo"]["tmp_name"];
move_uploaded_file($files_tmp_name,"./image/$nomPhoto");
$req = "insert into etudiant values('"."','".$nom."','".$prenom."','".$email."','".$nomPhoto."')";
if ($result=$con->query($req)) {
   
 
 <html>
     <body>
         <table border="1">
           <tr>
               <td>Nom :</td>
               <td> <?php echo ($nom) ?> </td>
           </tr>
           <tr>
               <td>prenom :</td>
               <td> <?php echo ($prenom) ?> </td>
           </tr>
           <tr>
               <td>email :</td>
               <td> <?php echo ($email) ?> </td>
           </tr>
           <tr>
               <td>Photo :</td>
               <td>< img src="image/<?php echo ($nomPhoto) ?>"> </td>
           </tr>
         </table>
</body>
 </html>