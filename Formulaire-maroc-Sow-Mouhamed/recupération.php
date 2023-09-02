<?php
if(isset($_GET['prenom']) AND isset($_GET['nom']))
	echo "h1 style= 'text-align: center; '> Bienvenue sur ma site WEB ".$_GET['prenom']."  ".$_GET['nom']."</h1>";
else
	echo 'Il faut bien remplir le formulaire';
?>