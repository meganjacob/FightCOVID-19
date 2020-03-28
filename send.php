<?php

    # This code was written for the contact form
    # Github only supports static sights so this can not be used
    # For future reference, if another hosting platform is used this can be used for the contact form

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$email_subject = $-POST['subject'];

	$email_body = "Name: $name.\n".
				  "Email: $email.\n".
				  "Message: $message.\n";

	$email_to = 'meganjacob2004@yahoo.com';

	mail($email_to, $email_subject, $email_body);
	header("Location: contact.html");
?>