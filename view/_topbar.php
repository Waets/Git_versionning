<div class="row" style="background-color: #000000;margin:0">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="topbar" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 text-center">
						<a href="index.php" class="logo"><img src="images/soundcloud-twitter-capital.jpg" width="90"></a>
						
					</div>
					<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
						<a href="edit_image.php" class="btn">About Us</a>
						<a href="https://twitter.com/soundcloud?lang=fr" class="btn"><img src="images/twitterlogo.png" width="25" height="25" alt="logo twitter" /></a>
						<a href="https://www.facebook.com/SoundCloud/" class="btn"><img src="images/fblogo.png" width="25" height="25" alt="logo facebook" /></a>
						<a href="logout.php" class="btn">Logout</a>
						<a href="edit_image.php" class="btn">Profile</a>
						<a href="add_music.php" class="btn"><i class="fa fa-plus"></i> Add a music</a>
						<a href="send_message.php" class="btn">Contact us</a>
						<?php 
 
       echo '<p class="abadi">'.'<FONT color="white">'.'Hello, '.$_SESSION['username'].'!'.'</FONT>'.'</p>';
    ?> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>