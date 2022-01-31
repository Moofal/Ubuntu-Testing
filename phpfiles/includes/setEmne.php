<?php
	function setEmne($arrayOfEmneId) {
		$emneNr = $_POST['emne'];
		$_SESSION['emne'] = $arrayOfEmneId[$emneNr];
		header("LOCATION: StudentMelding.php");
	}
	if(array_key_exists('emne', $_POST)) {
		setEmne($arrayOfEmneId);
	}
