<?php
	include_once 'dbh.inc.php';
	session_start();
	
	$tidspunkt = mysqli_real_escape_string($conn, date("Y-m-d"));
	$svar = mysqli_real_escape_string($conn, $_POST['svar']);
	$foreleser_id = mysqli_real_escape_string($conn, $_SESSION['user_id']);
	$tilbakemelding_student_id = mysqli_real_escape_string($conn, $_SESSION['tm']);
	
	$sql = "INSERT INTO svar_foreleser (tidspunkt, svar, foreleser_id, tilbakemelding_student_id)
		VALUES (?, ?, ?, ?);";
	$studentTableSet = "UPDATE tilbakemelding_student SET svar_gitt_foreleser = '1' WHERE tilbakemelding_student.id = ?;";
	$stmtIn = mysqli_stmt_init($conn);
	$stmtSt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmtIn, $sql)) {
		echo "SQL error";
	} else {
		mysqli_stmt_bind_param($stmtIn, "isii", $tidspunkt, $svar, $foreleser_id, $tilbakemelding_student_id);
		mysqli_stmt_execute($stmtIn);
	}
	if (!mysqli_stmt_prepare($stmtSt, $studentTableSet)) {
		echo "SQL error";
	} else {
		mysqli_stmt_bind_param($stmtSt, "i", $tilbakemelding_student_id);
		mysqli_stmt_execute($stmtSt);
	}
	header("LOCATION: http://localhost/phpfiles/ForeleserEmneMeldinger.php?svar=sent");