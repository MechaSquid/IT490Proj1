<?php
	require 'support.inc.php';

	$flightNo = $_POST['flight-number'];
	$tailNo = $_POST['tail-number'];
	$aircrew = $_POST['air-crew'];
	$destination = $_POST['destination'];
	$origin = $_POST['origin'];
	$cargo = $_POST['cargo'];
	$depart = $_POST['depart-time'];
	$arrive = $_POST['arrive-time'];

	$sql = "INSERT INTO `Aircraft` VALUES ('".$flightNo."', '".$tailNo."', '".$aircrew."', '".$destination."', '".$origin."', '".$cargo."', '".$depart."', '".$arrive."',)";

	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "Success";
	} catch (PDOException $e) {
		echo $e;
	}