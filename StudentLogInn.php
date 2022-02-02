<?php
	include_once 'header.php';
?>

<div class="login">
	<form action="includes/login_student_function.php" method="POST" class="login_form">
	<input type="text" name="email" placeholder="email">
	<input type="password" name="pwd" placeholder="password">
	<button type="submit" name="submit">Log In</button>
	</form>

	<a href="StudentRegistrer.php">Registrer Deg</a>
	<a href="StudentGlemtPassord.php">Glemt Passord</a>
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