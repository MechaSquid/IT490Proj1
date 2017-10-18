<?php
	require 'support.inc.php';
	$flightNo = $_POST['flight-number3'];

	$sql = "DELETE FROM `Flight` WHERE `Flight_number`=".$flightNo;
	
	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "Success";
	} catch (PDOException $e) {
		echo $e;
	}