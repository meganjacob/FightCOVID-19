<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$email_subject = $_POST['subject'];

	$email_body = "Name: $name.\n".
				  "Email: $email.\n".
				  "Message: $message.\n";

	$email_to = 'meganjacob2004@gmail.com';

	mail($email_to, $email_subject, $email_body);
	header("Location: contact.html");
?>
