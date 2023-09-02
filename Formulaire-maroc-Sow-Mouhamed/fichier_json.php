<?php 
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && $_POST['password'] != null && isset($_POST['password_confirmation'])){

	$message= array();

	$message['nom']=$_POST['nom'];
	$message['prenom']=$_POST['prenom'];
	$message['email']=$_POST['email'];
	$message['password']=$_POST['password'];
	$message['date']=date("d/m/Y à Hh:i");
	$message['id']=date("dmYHhis");

	$js = file_get_contents('messages.json');

	$js = json_decode($js, true);

	$js[] = $message;

	$js = json_encode($js);

	file_put_contents('messages.json', $js);


}
?>