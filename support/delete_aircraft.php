<?php
	require 'support.inc.php';
	$tailNo = $_POST['tail-number3'];

	$sql = "DELETE FROM `Aircraft` WHERE `Tail_Number`=".$tailNo;
	
	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "Success";
	} catch (PDOException $e) {
		echo $e;
	}