<?php
	include_once 'header.php';
?>

<div class="login">
	<form action="includes/login_foreleser_function.php" method="POST" class="login_form">
	<input type="text" name="email" placeholder="email">
	<input type="password" name="pwd" placeholder="password">
	<button type="submit" name="submit">Log In</button>
	</form>

	<a href="ForeleserRegistrer.php">Registrer Deg</a>
	<?php
		if (isset($_GET["newpwd"])) {
			if ($_GET["newpwd"] == "passordopdatert") {
				echo '<p>Passord er oppdatert</p>';
			}
		} 
	?>
	<a href="ForeleserGlemtPassord.php">Glemt Passord</a>
	<a href="index.php">Tilbake</a>
</div>

</main>
</body>
</html>

<style>
.login {
	 display: flex;
	 flex-direction: column;
	 align-items: center
}
.login_form {
	 display: flex;
	 flex-direction: column;
}
</style>