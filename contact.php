<?php
$TO = "joshua@tabetozor.com";
$h = "From: " . $TO;
$subject = "sujet";
$message = "";
while (list($key, $val) = each($HTTP_POST_VARS)) {$message .= "$key : $val\n";}
mail($TO, $subject, $message, $h);
Header("Location: localhost.Git_versionning/send_message.php");
?>