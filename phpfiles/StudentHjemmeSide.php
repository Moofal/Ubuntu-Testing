<?php
	include_once 'header.php';
?>
<?php
	$sti_sql = "SELECT navn, etternavn, e_post, studiekull
				FROM student 
				WHERE id = ?;";
	$sti_stmt = mysqli_stmt_init($conn);
	
	$stg_sql = "SELECT em.navn, em.id 
				FROM student st
				INNER JOIN studieretning strt ON st.studieretning_id = strt.id
				INNER JOIN studieretning_has_emne she ON strt.id = she.studieretning_id
				INNER JOIN emne em ON she.emne_id = em.id
				WHERE st.id = ?;";
		$stg_stmt = mysqli_stmt_init($conn);
	
	$arrayOfEmneId = array();
	$nr_of_emne = 0;
?>
<main class="main">
	<?php
	if (isset($_SESSION['type'])) {
		if ($_SESSION['type'] !== "s") {
		echo 'Du er ikke en student';
		} else {
			include_once 'StudentContent.php';
		}
	} else {
		echo 
		'
			<p>Du er ikke logget inn</p>
			<a href="index.php">Logg Inn</a>
		';
	}
	?>
   
</main>
</body>
</html>

<style>
	img {
		border: 1px solid #ddd;
		border-radius: 4px;
		padding: 5px;
		width: 150px;
	}
    table, th, td {
        border:1px solid black;
    }
	ul, li {
		list-style: none;
	}
    .fag-seksjon {
        display: flex;
        flex-direction: column;
    }
    .student-info {
        display: flex;
        flex-direction: column;
    }
    .main {
        display: flex;
        justify-content: space-evenly;
    }
	.registrer_form {
	 display: flex;
	 flex-direction: column;
	 align-items: center
}
</style>