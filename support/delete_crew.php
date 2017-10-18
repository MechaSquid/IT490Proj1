<?php
	require 'support.inc.php';
	$crew = $_POST['crew-id3'];

	$sql = "DELETE FROM `Air_Crew` WHERE `Crew_ID`=".$crew;
	
	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "Success";
	} catch (PDOException $e) {
		echo $e;
	}