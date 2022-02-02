<?php
	include_once 'header.php';
	$sql = "SELECT id, studieretning FROM studieretning;";
	$stmt =  mysqli_stmt_init($conn);
	// trenger bilde og emner
	
?>

<div class="registrer">
	<form action="includes/registrer_student.php" method="POST" class="registrer_form">
		<label>Fornavn</label>
		<input type="text" name="fname" placeholder="First Name">
		<label>Etternavn</label>
		<input type="text" name="lname" placeholder="Last Name">
		<label>E-Mail</label>
		<input type="text" name="email" placeholder="E-Mail">
		<label>Passord</label>
		<input type="password" name="pwd" placeholder="Pasword">
		<label>Repiter Passord</label>
		<input type="password" name="pwdrepeat" placeholder="Repeat pasword">
		<label>Studiekull</label>
		<input type="number" name="studiekull" placeholder="2020">
		<label>Studieretning</label>
		<select name="studieretning_id">
		<?php
			if(!mysqli_stmt_prepare($stmt, $sql)) {
				echo "SQL statment failed";
			} else {
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				while($row = mysqli_fetch_assoc($result)) {
					echo 
					'
					<option value="',$row["id"] ,'">
					',$row["studieretning"] ,'
					</option>
					';
				}
			}
		?>
		</select>
		<button type="submit" name="submit">Registrer Bruker</button>
	</form>
	<a href="index.php">Logg Inn</a>
</div>
	
</body>
</html>

<style>
.registrer {
	 display: flex;
	 flex-direction: column;
	 align-items: center
}
.registrer_form {
	 display: flex;
	 flex-direction: column;
}
</style>