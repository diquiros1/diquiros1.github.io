
Thanks for your message!

<?php
	$to = "2314diego@gmail.com";
	$subject = "Email from my website";
	$body = "the user typed in: " . $_POST['myEmail'];
	mail($to, $subject, $body);
?>