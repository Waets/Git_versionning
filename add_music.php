<?php

 require('config/config.php');
  require('model/functions.fn.php');
  
 if( isset($_FILES['music']) && !empty($_FILES['music']) &&
  	isset($_POST['title']) && !empty($_POST['title'])){
 	
 
  	$file = $_FILES['music'];
     $title = htmlspecialchars($_POST["title"]);
  
  	// Si le "fichier" reçu est bien un fichier
  		$ext = strtolower(substr(strrchr($file['name'], '.')  ,1));
  		// Vérification des extentions
  		if (preg_match('/\.(mp3|ogg)$/i', $file['name'])) {
  			$filename = md5(uniqid(rand(), true));
  			$destination = "musics/{$filename}.{$_SESSION['id']}.{$ext}";
 
             $result = move_uploaded_file($file["tmp_name"], $destination);
             if($result){
                 addMusic($db, $_SESSION["id"], $title, $destination);
             }else{
                 echo "Echec de l'upload ...";
             }
  
  		} else {
  			$error = 'Erreur, le fichier n\'a pas une extension autorisée !';
  		}

    }

include 'view/_header.php';
include 'view/add_music.php';
include 'view/_footer.php';
?>