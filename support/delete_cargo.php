<?php
	require 'support.inc.php';
	$skidID = $_POST['skid-id3'];

	$sql = "DELETE FROM `Cargo` WHERE `Skid_ID`=".$skidID;
	
	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "Success";
	} catch (PDOException $e) {
		echo $e;
	}