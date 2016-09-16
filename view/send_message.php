 <!doctype <!DOCTYPE html>
 <body>
<?php include '_topbar.php'; ?>


<p align="center"><strong><font-size="30px">Contact</strong><font size="6"></font></p>


<form action="mailto:joshua@tabetozor.com" method="post" name="contact">
					
<form>
		<input name="name" placeholder="What is your name?" class="name" required />
		<input name="emailaddress" placeholder="What is your email?" class="email" type="email" required />
    <textarea rows="4" cols="50" name="subject" placeholder="Please enter your message" class="message" required></textarea>
    <input name="submit" class="btn" type="submit" value="Send" />
</form>



<?php
include '_footer.php';
?>