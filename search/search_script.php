<?php
	//rename to search results
	require '../support/support.inc.php';
	$col = "";
	$cond = "";
	if(isset($_POST['flight-number']) && $_POST['flight-number'] != "") {
		$col .= "`Flight_number`";
		$cond .= "`Flight_number`"."='".$_POST['flight-number']."'"; 
	}
	if(isset($_POST['tail-number']) && $_POST['tail-number'] != "") {
		$col .= "`Operating_aircraft`";
		$cond .= "`Operating_aircraft`"."='".$_POST['tail-number']."'";
	}
	if(isset($_POST['origin']) && $_POST['origin'] != "") {
		$col .= "`From_airport`";
		$cond .= "`From_airport`"."='".$_POST['origin']."'";
	}
	if(isset($_POST['destination']) && $_POST['destination'] != "") {
		$col .= "`To_airport`";
		$cond .= "`To_airport`"."='".$_POST['destination']."'";
	}
	if(isset($_POST['cargo']) && $_POST['cargo'] != "") {
		$col .= "`Cargo_carried`";
		$cond .= "`Cargo_carried`"."='".$_POST['cargo']."'";
	}
	if(isset($_POST['crew-id']) && $_POST['crew-id'] != "") {
		$col .= "`Air_crew`";
		$cond .= "`Air_crew`"."='".$_POST['crew-id']."'";
	}

	$sql = 'SELECT ' .str_replace("``", "`, `", $col). ' FROM `Flight` WHERE ' .str_replace("'`", "' AND `", $cond);
	
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	// while statement to fetch row

	// SELECT 
	// $col
	// `Flight_number`, `Operating_aircraft` FROM `Flight` WHERE 
	// $cond
	// `Flight_number`='JB237' AND `Operating_aircraft`='FT494' 
?>
