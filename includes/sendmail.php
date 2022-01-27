<?php

	if(!isset($_POST['submit'])) {
		header("LOCATION: http://localhost/phpfiles/email.php?mail=error");
	} else {
		$to = $_POST['email'];
		if (empty($to)){
			header("LOCATION: http://localhost/phpfiles/email.php?mail=empty");
		} else {
			if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
				header("LOCATION: http://localhost/phpfiles/email.php?mail=invalid");
			} else {
				$subject = "Test Mail";
				$message  = "This is a test";
				$headers = "From: antonkjus@gmail.com";
				mail($to, $subject, $message , $headers);
			}
		}
	}
?>