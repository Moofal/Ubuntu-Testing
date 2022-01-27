<?php
	session_start();
    if(isset($_POST['submit'])){
    if(!empty($_POST['emne_id'])) {
        $_SESSION['emne'] = $_POST['emne_id'];
		header("LOCATION: http://localhost/phpfiles/ForeleserHjemmeSide.php?id=selected");
    } else {
		header("LOCATION: http://localhost/phpfiles/ForeleserHjemmeSide.php?id=error");

    }
    }
?>