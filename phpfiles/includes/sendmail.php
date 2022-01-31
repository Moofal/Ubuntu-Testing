<?php

	if(!isset($_POST['submit'])) {
		header("LOCATION: ../email.php?mail=error");
	} else {
		$to = $_POST['email'];
		if (empty($to)) {
			header("location: ../email.php?mail=empty");
			exit();
		} else {
			include_once 'dbh.inc.php';
			include_once 'functions.php';
			$userExists = uidExists($conn, $to);
				if ($userExists === false){
					header("LOCATION: ../email.php?mail=notExist");
				} else {
					if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
					header("LOCATION: ../email.php?mail=invalid");
					} else {
						$subject = "Test Mail";
						$message  = "This is a test";
						$headers = "From: datasikkerhet.gruppe3@gmail.com";
						mail($to, $subject, $message , $headers);
						header("LOCATION: ../email.php?mail=sent");
					}
				}
			}
		}
?>