<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Demo Contact Form';
		$to = 'contact@modames.com';
		$subject = 'test contact page ';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Merci de préciser votre prénom et votre nom';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Merci de renseigner une adresse mail valide';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Merci de renseigner un message';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Message envoyé !</div>';
	} else {
		$result='<div class="alert alert-danger">Oups, il y a une erreur !</div>';
	}
}
	}
?>
