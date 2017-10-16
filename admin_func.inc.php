<?php
	session_start();
	$_SESSION['logged_in'] = true; // for testing only
	if ($_SESSION['logged_in']) {
?>

<h2>Browse</h2>
<ul>
	<li><a href="./browse/aircraft.php">Aircrafts</a></li>
	<li><a href="./browse/crew.php">Crew</a></li>
	<li><a href="./browse/cargo.php">Cargo</a></li>
	<li><a href="./browse/scheduled_flights.php">Scheduled Flights</a></li>
</ul>

<h2>Search</h2>
<ul>
	<li><a href="./search/flight_number.php">Flight Number</a></li>
	<li><a href="./search/tail_number.php">Tail Number</a></li>
	<li><a href="./search/origin.php">Origin</a></li>
	<li><a href="./search/destination.php">Destination</a></li>
	<li><a href="./search/crew_id.php">Crew ID</a></li>
</ul>

<h2>Add/Edit/Delete</h2>
<ul>
	<li><a href="./crud/aircraft_crud.php">Aircrafts</a></li>
	<li><a href="./crud/crew_crud.php">Crew</a></li>
	<li><a href="./crud/cargo_crud.php">Cargo</a></li>
	<li><a href="./crud/flight_crud.php">Flights</a></li>
</ul>
<?php
	} //end if statement
?>