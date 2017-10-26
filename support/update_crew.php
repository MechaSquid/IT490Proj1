<?php
	require 'support.inc.php';
	$crew = $_POST['crew-id2'];
	$pilot = $_POST['pilot-name2'];
	$navigator = $_POST['navigator-name2'];

	$sql = "UPDATE `Air_Crew` SET `Pilot_Name`='".$pilot."',`Navigator_Name`=".$navigator." WHERE `Crew_ID`=".$crew;
	//update $sql with better conditionals in case $pilot or $fuel is blank
  
	
	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "Success";
	} catch (PDOException $e) {
		echo $e;
	}