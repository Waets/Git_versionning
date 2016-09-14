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









 <!--<p align="center"><strong>Contact</strong></p>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
<form action="envoi.php" method="post" enctype="application/x-www-form-urlencoded" name="formulaire">
<tr> 
<td colspan="3"><strong>Envoyer un message</strong></td>
</tr>
<tr> 
<td><div align="left">Votre nom :</div></td>
<td colspan="2"><input type="text" name="nom" size="45" maxlength="100"></td>
</tr>
<tr> 
<td width="17%"><div align="left">Votre mail :</div></td>
<td colspan="2"><input type="text" name="mail" size="45" maxlength="100"></td>
</tr>
<tr> 
<td><div align="left">Sujet : </div></td>
<td colspan="2"><input type="text" name="objet" size="45" maxlength="120"></td>
</tr>
<tr> 
<td><div align="left">Message : </div></td>
<td colspan="2"><textarea name="message" cols="50" rows="10"></textarea></td>
</tr>
<tr> 
<td></td>
<td width="42%"><center>
<input type="reset" name="Submit" value="Réinitialiser le formulaire">
</center></td>
<td width="41%"><center>
<input type="submit" name="Submit" value="Envoyer">
</center></td>
</tr>
</form>
</table>/*
</body> -->
<?php
include '_footer.php';
?>