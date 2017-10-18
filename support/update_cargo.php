<?php
	require 'support.inc.php';
	$skidNo = $_POST['skid-id2'];
	$weight = $_POST['skid-weight2'];
	$content = $_POST['skid-contents2'];

	$sql = "UPDATE `Cargo` SET `Skid_weight`='".$weight."',`Skid_contents`=".$content." WHERE `Skid_ID`=".$skidNo;
	//update $sql with better conditionals in case $weight or $fuel is blank
  
	
	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "Success";
	} catch (PDOException $e) {
		echo $e;
	}