<?php
	// session_start();
	if ($_SESSION['logged_in']) {
?>

<h2>Browse</h2>
<ul>
	<li><a href="./browse/aircraft.php" style="width:25%;">Aircrafts</a></li>
	<li><a href="./browse/crew.php" style="width:25%;">Crew</a></li>
	<li><a href="./browse/cargo.php" style="width:25%;">Cargo</a></li>
	<li><a href="./browse/scheduled_flights.php" style="width:25%;">Scheduled Flights</a></li>
</ul>

<h2>Search</h2>
<ul>
	<li><a href="./search/flight_search.php" style="width:100%;">Flight Number</a></li>
</ul>

<h2>Add/Edit/Delete</h2>
<ul>
	<li><a href="./crud/aircraft_crud.php" style="width:25%;">Aircrafts</a></li>
	<li><a href="./crud/crew_crud.php" style="width:25%;">Crew</a></li>
	<li><a href="./crud/cargo_crud.php" style="width:25%;">Cargo</a></li>
	<li><a href="./crud/flight_crud.php" style="width:25%;">Flights</a></li>
</ul>
<?php
	} //end if statement
?>