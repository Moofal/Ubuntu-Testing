<?php
	session_start();
    if(isset($_POST['submit'])){
    if(!empty($_POST['emne_id'])) {
        echo $_POST['emne_id'];
    } else {
		header("LOCATION: ../ForeleserHjemmeSide.php?id=error");

    }
    }
?>