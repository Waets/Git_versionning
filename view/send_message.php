 <!doctype <!DOCTYPE html>
 <body>
<?php include '_topbar.php'; ?>


<p align="center"><strong>Contact</strong></p>


<form method="POST">
					<div class="form-input">
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
					</div> 


<?php
include '_footer.php';
?>