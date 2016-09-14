<div class="row" style="background-color: #333;margin:0">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="topbar" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 text-center">
						<a href="index.php" class="logo"><i class="fa fa-soundcloud"></i></a>
						
					</div>
					<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">

						<a href="https://twitter.com/soundcloud?lang=fr" class="btn"><img src="images/twitterlogo.png" width="25" height="25" alt="logo twitter" /></a>
						<a href="https://www.facebook.com/SoundCloud/" class="btn"><img src="images/fblogo.png" width="25" height="25" alt="logo facebook" /></a>
						<a href="logout.php" class="btn">Déconnexion</a>
						<a href="edit_image.php" class="btn">Profil</a>
						<a href="add_music.php" class="btn"><i class="fa fa-plus"></i> Ajouter une musique</a>
						<a href="send_message.php" class="btn">message</a>
						<?php 
  session_start();
   
        echo '<p class="abadi">'.'<FONT color="white">'.'Bonjour à toi, '.$_SESSION['username'].'</FONT>'.'</p>';
    ?> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>