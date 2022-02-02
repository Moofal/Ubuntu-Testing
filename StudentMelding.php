<?php 
	include_once 'header.php';
	//Created a template
	$sql = "SELECT navn FROM emne WHERE id=?";
	//create a prepared statement
	$stmt = mysqli_stmt_init($conn);
	
?>
<main>
<?php
		if (!mysqli_stmt_prepare($stmt, $sql)) {
				echo "SQL statment failed";
			} else {
				mysqli_stmt_bind_param($stmt, "i", $_SESSION['user_id']);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				while($row = mysqli_fetch_assoc($result)) {
					echo 
					'<div class="content">
					<h2>Gi tilbakemelding til ',$row["navn"] ,'</h2>';
				}
				echo '
				<div>
				<form action="includes/tilbakemelding.inc.php" method="POST">
					<label>Tilbakemelding</label>
					<input type="text" name="tilbakemelding" placeholder="Tilbakemelding">
					<button type="submit" name="submit">Send</button>
				</form>
				</div>
				</div>
				';
		}
?>
    
</main>

</body>

</html>

<style>
    main {
        display: flex;
        justify-content: center;
    }
    .content {
        justify-content: center;
    }
</style>