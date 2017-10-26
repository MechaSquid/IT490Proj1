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

	$sql = 'SELECT * FROM `Flight` WHERE ' .str_replace("'`", "' AND `", $cond);
	
	$stmt = $conn->prepare($sql);
	$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flight Search Results</title>
</head>
<body>
	<table>
		<tr>
			<th>Flight Number</th>
			<th>Tail Number</th>
			<th>Air Crew</th>
			<th>Destination</th>
			<th>Origin</th>
			<th>Cargo Carried</th>
			<th>Departure Time</th>
			<th>Arrival Time</th>
		</tr>
	<?php
		while ($row = $stmt->fetch()) {
			echo '<tr>';
			echo '<td>'.$row[0].'</td>';
			echo '<td>'.$row[1].'</td>';
			echo '<td>'.$row[2].'</td>';
			echo '<td>'.$row[3].'</td>';
			echo '<td>'.$row[4].'</td>';
			echo '<td>'.$row[5].'</td>';
			echo '<td>'.$row[6].'</td>';
			echo '<td>'.$row[7].'</td>';
			echo '</tr>';
		}
	?>
	</table>
</body>
</html>
<?php