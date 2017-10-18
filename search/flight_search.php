<?php 
	session_start();
	$_SESSION['logged_in'] = true; // for testing only
	if ($_SESSION['logged_in']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="../js/scripts.js"></script>
</head>
<body>
	<form action="search_results.php" method="POST">
		<label for="flight-number">Flight Number</label>
		<input type="text" list="flight-numbers" id="flight-number" name="flight-number" onfocus="pullChoices(this.name)">
		<datalist id="flight-numbers"></datalist>
		
		<label for="tail-number">Tail Number</label>
		<input type="text" list="tail-numbers" id="tail-number" name="tail-number" onfocus="pullChoices(this.name)">
		<datalist id="flight-numbers"></datalist>
		
		<label for="origin">Origin</label>
		<input type="text" list="origins" id="origin" name="origin" onfocus="pullChoices(this.name)">
		<datalist id="origins"></datalist>
		
		<label for="destination">Destination</label>
		<input type="text" list="destinations" id="destination" name="destination" onfocus="pullChoices(this.name)">
		<datalist id="destinations"></datalist>
		
		<label for="cargo">Cargo</label>
		<input type="text" list="cargos" id="cargo" name="cargo" onfocus="pullChoices(this.name)">
		<datalist id="cargos"></datalist>
		
		<label for="crew-id">Crew ID</label>
		<input type="text" list="crew-ids" id="crew-id" name="crew-id" onfocus="pullChoices(this.name)">
		<datalist id="crew-ids"></datalist>
		
		<button>Search</button>
	</form>
</body>
</html>

<?php
	} //end if statement
?>