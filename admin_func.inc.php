<html>
<head>
	<title>Wrong Way Airlines Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
  <link href="https://fonts.googleapis.com/css?family=Hind|Passion+One" rel="stylesheet">
</head>
  
  
  <body>
  	<div class="container">
   
       <a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/" style="text-decoration:none;">
    <div class="header">
	   <h1>Wrong Way Airlines</h1>   
	  </div>
 </a>
       
      <div class="nav_bar">
        <ul>
          <li><a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/index.php">Flight Search</a></li>
  	      <li><a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/index.php">Cargo Search</a></li>
   		    <li><a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/index.php">Admin login</a></li>
        </ul>
      </div>

</html>


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
	<li><a href="./search/flight_search.php">Flight Number</a></li>
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