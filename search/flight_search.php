<?php 
	session_start();
	$_SESSION['logged_in'] = true; // for testing only
	if ($_SESSION['logged_in']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search Page</title>
 	<link rel="stylesheet" type="text/css" href="../css/main.css"> 
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
  <link href="https://fonts.googleapis.com/css?family=Hind|Passion+One" rel="stylesheet">
	<script src="../js/scripts.js"></script>


</head>
<body>
	<div class="container" id="mainContainer">
	
 <a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/" style="text-decoration:none;">
    <div class="header">
	   <h1>Wrong Way Airlines</h1>   
	  </div>
 </a>

 
    <div class="nav_bar">
      <ul>      
        <li><a href="../index.php">Flight Search</a></li>
	      <li><a href="../index.php">Cargo Search</a></li>
 		    <li><a href="../admin_func.inc.php">Admin login</a></li>      
      </ul>  
    </div>
 <div class="container">
	<form action="search_results.php" method="POST">
		<label for="flight-number">Flight Number</label>
		<input type="text" list="flight-numbers" id="flight-number" name="flight-number" onfocus="pullFlightChoices(this.name)">
		<datalist id="flight-numbers"></datalist><br>
		
		<label for="tail-number">Tail Number</label>
		<input type="text" list="tail-numbers" id="tail-number" name="tail-number" onfocus="pullFlightChoices(this.name)">
		<datalist id="tail-numbers"></datalist><br>
		
		<label for="origin">Origin</label>
		<input type="text" list="origins" id="origin" name="origin" onfocus="pullFlightChoices(this.name)">
		<datalist id="origins"></datalist><br>
		
		<label for="destination">Destination</label>
		<input type="text" list="destinations" id="destination" name="destination" onfocus="pullFlightChoices(this.name)">
		<datalist id="destinations"></datalist><br>
		
		<label for="cargo">Cargo</label>
		<input type="text" list="cargos" id="cargo" name="cargo" onfocus="pullFlightChoices(this.name)">
		<datalist id="cargos"></datalist><br>
		
		<label for="crew-id">Crew ID</label>
		<input type="text" list="crew-ids" id="crew-id" name="crew-id" onfocus="pullFlightChoices(this.name)">
		<datalist id="crew-ids"></datalist><br>
		
		<button>Search</button>
	</form>
 </div>
</div>
</body>
</html>

<?php
	} //end if statement
?>