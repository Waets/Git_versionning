<?php
require('config/config.php');
require('model/functions.fn.php');
session_start();

if(	isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2']) &&
	!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2'])) {

	$password = htmlspecialchars($_POST['password']);
	$password2 = htmlspecialchars($_POST['password2']);
	$username = htmlspecialchars($_POST['username']);
	$email = htmlspecialchars($_POST['email']);

		if($password == $password2)
			{

			$ouiEmail = isEmailAvailable($db, $email);
			$ouiUsername = isUsernameAvailable($db, $username);	

				if($ouiEmail){


					if ($ouiUsername) {
					

						$password = sha1($password);
						userRegistration($db, $username, $email, $password);
						header('Location: login.php');
					}

					else{

						echo "Cet Username est déjà utilisé";
					}

				}

				else{

						echo "Cet Email est déjà utilisé";
					}
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