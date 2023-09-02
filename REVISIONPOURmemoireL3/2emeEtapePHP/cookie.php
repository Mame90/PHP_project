<body>
<form action="formulaire1.php" method="get">       
Nom  <input  type="text" name="nom"><br><br>
Email<input type="text" name="email"><br>
<input  type="submit" name="valider" value="valider">
</form>
</body>

<?php
setcookie("lecookie",session_id(),time()+3600);
if(isset($_COOKIE['lecookie']))
echo $_COOKIE['lecookie'];
?>

<?php
setcookie('lecookie',session_id(),time()+3600);
if (isset($_COOKIE['lecookie']))
echo $_COOKIE['lecookie'];
?>
<?php
if(!isset($_COOKIE['lecookie'])) {
setcookie("lecookie",'2018',time()+3600);
header("Location:session2.php"]);
}
?>