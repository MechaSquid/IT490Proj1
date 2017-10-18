<?php
	require 'support.inc.php';

	$tail = $_POST['tail-number'];
	$airtype = $_POST['aircraft-type'];
	$fuel = $_POST['fuel-amount'];

	$sql = "INSERT INTO `Aircraft` VALUES ('".$tail."', '".$airtype."', '".$fuel."')";

	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "Success";
	} catch (PDOException $e) {
		echo $e;
	}