<?php
require('config/config.php');
require('model/functions.fn.php');
session_start();

if(	isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && 
	!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	$password = htmlspecialchars($_POST['password']);
	$password2 = htmlspecialchars($_POST['password2']);
	$username = htmlspecialchars($_POST['username']);
	$email = htmlspecialchars($_POST['email']);
	
		if($password == $password2)
			{

			$password = sha1($password);
			userRegistration($db, $username, $email, $password);
			}
 
		else
		{
			echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
		}

}else{ 
	$_SESSION['message'] = 'Erreur : Formulaire incomplet';
	header('Location: register.php');
}
				



?>