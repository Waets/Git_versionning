<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

if(isset($_POST['email']) && isset($_POST['password'])){

	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);

	if(!empty($_POST['email']) && !empty($_POST['password'])){


		$connecter=userConnection($db, $email, sha1($password));

			if ($connecter) {
				header('Location: dashboard.php');
			}

			else{
				$error = 'Mauvais identifiants !';
			}

		

	}else{
		$error = 'Champs requis !';
	}
}
	else{

		$error = 'erreur 404';
	}


/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';