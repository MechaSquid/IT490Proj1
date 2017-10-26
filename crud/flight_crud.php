<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aircraft Results</title>
 	<link rel="stylesheet" type="text/css" href="../css/main.css"> 
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
  <link href="https://fonts.googleapis.com/css?family=Hind|Passion+One" rel="stylesheet">
  

  
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
<script src="../js/scripts.js"></script>
<div id="add-flight">

	<form action="../support/insert_flight.php" method="POST">
		<label for="flight-number">Flight Number</label>
		<input type="number" id="flight-number" name="flight-number" required>
		<label for="tail-number">Tail Number</label>
		<input type="text" id="tail-number" name="tail-number" required>
		<label for="air-crew">Air Crew</label>
		<input type="number" id="air-crew" name="air-crew" required>
		<label for="destination">destination</label>
		<input type="number" id="destination" name="destination" required><br><br>
		<label for="origin">origin</label>
		<input type="number" id="origin" name="origin" required>
		<label for="cargo">cargo</label>
		<input type="number" id="cargo" name="cargo" required>
		<label for="depart-time">depart-time</label>
		<input type="number" id="depart-time" name="depart-time" required>
		<label for="arrive-time">arrive-time</label>
		<input type="number" id="arrive-time" name="arrive-time" required><br>
		<button>Insert flight</button>

	</form>
 </div>
 
<hr>

<div id="update-flight">
	<form action="../support/update_flight.php" method="POST">
		<label for="flight-number2">Flight Number</label>
		<input type="text" list="flight-number2s" id="flight-number2" name="flight-number2" onfocus="pullFlightChoices(this.name)">
		<datalist id="flight-number2s"></datalist>
		<label for="tail-number2">Tail Number</label>
		<input type="text" id="tail-number2" name="tail-number2" required>
		<label for="air-crew2">Air Crew</label>
		<input type="number" id="air-crew2" name="air-crew2" required>
		<label for="destination2">destination</label>
		<input type="number" id="destination2" name="destination2" required><br><br>
		<label for="origin2">origin</label>
		<input type="number" id="origin2" name="origin2" required>
		<label for="cargo2">cargo</label>
		<input type="number" id="cargo2" name="cargo2" required>
		<label for="depart-time2">depart-time</label>
		<input type="number" id="depart-time2" name="depart-time2" required>
		<label for="arrive-time2">arrive-time</label>
		<input type="number" id="arrive-time2" name="arrive-time2" required><br><br>
		<button>Update flight</button>
	</form>
</div>
<hr>
<div id="delete-flight">
	<form action="../support/delete_flight.php" method="POST">
		<label for="flight-number3">Flight Number</label>
		<input type="text" list="flight-number3s" id="flight-number3" name="flight-number3" onfocus="pullFlightChoices(this.name)">
		<datalist id="flight-number3s"></datalist>
		<label for="tail-number3">Tail Number</label>
		<input type="text" id="tail-number3" name="tail-number3" required>
		<label for="air-crew3">Air Crew</label>
		<input type="number" id="air-crew3" name="air-crew3" required>
		<label for="destination3">destination</label>
		<input type="number" id="destination3" name="destination3" required><br><br>
		<label for="origin3">origin</label>
		<input type="number" id="origin3" name="origin3" required>
		<label for="cargo3">cargo</label>
		<input type="number" id="cargo3" name="cargo3" required>
		<label for="depart-time3">depart-time</label>
		<input type="number" id="depart-time3" name="depart-time3" required>
		<label for="arrive-time3">arrive-time</label>
		<input type="number" id="arrive-time3" name="arrive-time3" required><br><br>
		<button type="button" onclick="confirmDelete(this.form)">Delete flight</button>
	</form>
</div>
</div>
</body>
</html>