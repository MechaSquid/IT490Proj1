<?php
	require 'support.inc.php';

	$skid = $_POST['skid-id'];
	$weight = $_POST['skid-weight'];
	$contents = $_POST['skid-contents'];

	$sql = "INSERT INTO `Cargo` VALUES ('".$skid."', '".$weight."', '".$contents."')";

	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "Success";
	} catch (PDOException $e) {
		echo $e;
	}