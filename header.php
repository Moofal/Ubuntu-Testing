<?php
	include_once 'includes/dbh.inc.php';
	session_start();
	$_SESSION['user_id'] = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>
    <div class="nav-bar">
        <h1>Nettside Navn</h1>
		<a href="ForeleserHjemmeside.php">Din Side</a>
		<form action="includes/logout.php" method="POST">
			<button type="submit" name="submitLogout">Logg ut</button>
		</form>
    </div>
</header>