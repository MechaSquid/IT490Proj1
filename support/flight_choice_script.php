<?php 
	require 'support.inc.php';

	$request_body = file_get_contents('php://input');
	$request = json_decode($request_body);
	switch ($request->request) {
		case 'flight-number':
			$stmt = $conn->prepare("SELECT `Flight_number` FROM `Flight`");
			$stmt->execute();
			while ($row = $stmt->fetch()) {
				echo '<option value="'.$row[0].'">';
			}
			break;

		case 'tail-number':
			$stmt = $conn->prepare("SELECT DISTINCT `Operating_aircraft` FROM `Flight`");
			$stmt->execute();
			while ($row = $stmt->fetch()) {
				echo '<option value="'.$row[0].'">';
			}
			break;

		case 'origin':
			$stmt = $conn->prepare("SELECT DISTINCT `From_airport` FROM `Flight`");
			$stmt->execute();
			while ($row = $stmt->fetch()) {
				echo '<option value="'.$row[0].'">';
			}
			break;

		case 'destination':
			$stmt = $conn->prepare("SELECT DISTINCT `To_airport` FROM `Flight`");
			$stmt->execute();
			while ($row = $stmt->fetch()) {
				echo '<option value="'.$row[0].'">';
			}
			break;

		case 'cargo':
			$stmt = $conn->prepare("SELECT DISTINCT `Cargo_carried` FROM `Flight`");
			$stmt->execute();
			while ($row = $stmt->fetch()) {
				echo '<option value="'.$row[0].'">';
			}
			break;

		case 'crew-id':
			$stmt = $conn->prepare("SELECT DISTINCT `Air_crew` FROM `Flight`");
			$stmt->execute();
			while ($row = $stmt->fetch()) {
				echo '<option value="'.$row[0].'">';
			}
			break;
	}