<?php
 $host="localhost" 
 $user="root"; 
 $pass=""; 
 $base="web2";
  mysql_connect($host, $user, $pass) or die("erreur de connexion à MySQL"); 
  mysql_select_db($base) or die("erreur à la sélection de $base);
   mysql_close(); ?>
