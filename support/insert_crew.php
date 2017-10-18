<?php
	require 'support.inc.php';

	$crew = $_POST['crew-id'];
	$pilot = $_POST['pilot-name'];
	$navigator = $_POST['navigator-name'];

	$sql = "INSERT INTO `Air_Crew` VALUES ('".$crew."', '".$pilot."', '".$navigator."')";

	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "Success";
	} catch (PDOException $e) {
		echo $e;
	}