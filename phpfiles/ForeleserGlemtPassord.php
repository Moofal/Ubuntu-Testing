<?php
	include_once 'header.php';
?>

<div class="login">
	<form action="includes/reset_request_foreleser.php" method="POST" class="login_form">
	<input type="text" name="email" placeholder="email">
	<button type="submit" name="reset-request-submit">Log In</button>
	</form>
	
	<?php
		if(isset($_GET["reset"])) {
			if ($_GET["reset"] == "success") {
				echo '<p>Skjekk mailen din!</p>';
			}
		}
	?>
	
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