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
<div id="add-crew">
	<form action="../support/insert_crew.php" method="POST">
		<label for="crew-id">Crew ID</label>
		<input type="number" id="crew-id" name="crew-id" required>
		<label for="pilot-name">Pilot Name</label>
		<input type="text" id="pilot-name" name="pilot-name" required>
		<label for="navigator-name">Navigator Name</label>
		<input type="number" id="navigator-name" name="navigator-name" required>
		<button>Insert Crew</button>
	</form>
</div>
<div id="update-crew">
	<form action="../support/update_crew.php" method="POST">
		<label for="crew-id2">Crew ID</label>
		<input type="text" list="crew-id2s" id="crew-id2" name="crew-id2" onfocus="pullFlightChoices(this.name)">
		<datalist id="crew-id2s"></datalist>
		<label for="pilot-name2">Pilot Name</label>
		<input type="text" id="pilot-name2" name="pilot-name2" required>
		<label for="navigator-name2">Navigator Name</label>
		<input type="number" id="navigator-name2" name="navigator-name2" required>
		<button>Update Crew</button>
	</form>
</div>
<div id="delete-crew">
	<form action="../support/delete_crew.php" method="POST">
		<label for="crew-id3">Crew ID</label>
		<input type="text" list="crew-id3s" id="crew-id3" name="crew-id3" onfocus="pullFlightChoices(this.name)">
		<datalist id="crew-id3s"></datalist>
		<label for="pilot-name3">Pilot Name</label>
		<input type="text" id="pilot-name3" name="pilot-name3" required>
		<label for="navigator-name3">Navigator Name</label>
		<input type="number" id="navigator-name3" name="navigator-name3" required>
		<button type="button" onclick="confirmDelete(this.form)">Delete Crew</button>
	</form>
</div>
</div>
</body>
</html>