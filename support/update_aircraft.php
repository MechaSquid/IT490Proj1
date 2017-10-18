<?php
	require 'support.inc.php';
	$flightNo = $_POST['flight-number2'];
	$tailNo = $_POST['tail-number2'];
	$aircrew = $_POST['air-crew2'];
	$destination = $_POST['destination2'];
	$origin = $_POST['origin2'];
	$cargo = $_POST['cargo2'];
	$depart = $_POST['depart-time2'];
	$arrive = $_POST['arrive-time2'];

	$sql = "UPDATE `Flight` SET `Operating_aircraft`='".$tailNo."',`Air_crew`='".$aircrew."',`To_airport`='".$destination."',`From_airport`='".$origin."',`Cargo_carried`='".$cargo."',`Departure_time`='".$depart."',`Arrival_time`='".$arrive."' WHERE `Flight_number`=".$flightNo;
	//update $sql with better conditionals in case $airtype or $fuel is blank
	
	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "Success";
	} catch (PDOException $e) {
		echo $e;
	}