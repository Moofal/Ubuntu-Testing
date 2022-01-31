	<div class="fag-seksjon">
        <h2>Send tilbakemelding til fag</h2>
		<form action="includes/tilbakemelding.inc.php" method="POST" class="registrer_form">
		<label>Velg emne</label>
		<select name="emne_id">
		<?php
			if(!mysqli_stmt_prepare($stg_stmt, $stg_sql)) {
				echo "SQL statment failed";
			} else {
				mysqli_stmt_bind_param($stg_stmt, "i", $_SESSION['user_id']);
				mysqli_stmt_execute($stg_stmt);
				mysqli_stmt_execute($stg_stmt);
				$stg_result = mysqli_stmt_get_result($stg_stmt);
				while($stg_row = mysqli_fetch_assoc($stg_result)) {
					echo 
					'
					<option value="',$stg_row["id"] ,'">
					',$stg_row["navn"] ,'
					</option>
					';
				}
			}
		?>
		</select>
		<label>Tilbakemelding til emne</label>
		<input  type="text" name="tilbakemelding" placeholder="Tilbakemedling">
		<button type="submit" name="submit">Send</button>
		</form>
    </div>
    <div class="student-info">
        <h2>Foreleser Informasjon</h2>
        <table>
            <tr>
                <th>Navn</th>
                <th>Epost</th>
            </tr>
			<?php 
			if (!mysqli_stmt_prepare($sti_stmt, $sti_sql)) {
				echo "SQL statment failed";
			} else {
				mysqli_stmt_bind_param($sti_stmt, "i", $_SESSION['user_id']);
				mysqli_stmt_execute($sti_stmt);
				$sti_result = mysqli_stmt_get_result($sti_stmt);
				while($student_row = mysqli_fetch_assoc($sti_result)) {
					echo '
					<tr>
					<th>',$student_row["navn"],' ',$student_row["etternavn"],'</th>
					<th>',$student_row["e_post"],'</th>
					</tr>
					</table>';
            
			 } }?>
    </div>