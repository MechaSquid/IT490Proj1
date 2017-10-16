<?php 
	require '.db_login.php';

	$request_body = file_get_contents('php://input');
	$request = json_decode($request_body);
	switch ($request->request) {
		case 'origin':
			$stmt = $conn->prepare("SELECT `To_airport` FROM `Flight`");
			$stmt->execute();
			while ($row = $stmt->fetch()) {
				echo '<option value="'.$row[0].'">';
			}
			break;

		case 'destination':
			$stmt = $conn->prepare("SELECT `From_airport` FROM `Flight`");
			$stmt->execute();
			while ($row = $stmt->fetch()) {
				echo '<option value="'.$row[0].'">';
			}
			break;
	}
?>