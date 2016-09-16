 <!doctype <!DOCTYPE html>
 <body>
<?php include '_topbar.php'; ?>


<p align="center"><strong>Contact</strong></p>


<form action="mailto:joshua@tabetozor.com" method="post" name="contact">
					
<form>
		<input name="name" placeholder="What is your name?" class="name" required />
		<input name="emailaddress" placeholder="What is your email?" class="email" type="email" required />
    <textarea rows="4" cols="50" name="subject" placeholder="Please enter your message" class="message" required></textarea>
    <input name="submit" class="btn" type="submit" value="Send" />
</form>

					<!--<div class="form-input">
						<span class="username">
							<p align="center"><input type="text" name="nom" placeholder="nom" size="50"></p>
						</span>
					</div>
					<div class="form-input">
						<span class="email">
							<p align="center"><input type="text" name="email" placeholder="Email" size="50"></p>
						</span>
					</div>
					<div class="form-input">
						<span class="password">
							<p align="center"><input type="text" name="message" placeholder="message" cols="50" rows="10" size="50"></textarea></td></p>
						</span>
						<p align="center"><input type="reset" name="Submit" value="Réinitialiser le formulaire"></p>
</center></td>
<td width="41%"><center>
<input type="submit" name="Submit" value="Envoyer">
</center></td>
					</div> -->


<?php
include '_footer.php';
?>