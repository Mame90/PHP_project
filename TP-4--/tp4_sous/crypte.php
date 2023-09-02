<?php
	$mot = "bambey";
	$motC = password_hash($mot, PASSWORD_DEFAULT);
	echo $motC."<br/>";
	$motCC = md5($mot);
	echo $motCC."<br/>";
	$motCCC = sha1($mot);
	echo $motCCC."<br/>";
?>