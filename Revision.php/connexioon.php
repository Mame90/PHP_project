<form action="formulaire.php" method="post"> 

    Name: <input type="text" name="username"><br>

     Email: <input type="text" name="email"><br>

      <input type="submit" name="valider" value="valider"> </form>

<?php if(isset($_REQUEST["valider"])) 
{ 
    $user=$_POST["username"]; 

    $email=$_REQUEST["email"]; 

    if(isset($user) && (isset($email)))
     { 
         /*
         echo "Le username :" .$_POST['username']."<br/>";
         echo "Username encore:" . $GLOBALS["_GET"]["username"]; 
         echo "L'email :" .$_REQUEST['email'];
          } 
}
?>*/
//               
           extract($_POST);
          echo $username;
           echo $email; 
}
}
           ?>
