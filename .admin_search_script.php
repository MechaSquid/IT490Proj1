<?php 
	require '.db_login.php';

	$request_body = file_get_contents('php://input');
	$request = json_decode($request_body);
	switch ($request->request) {
		case 'origin':
			# code...
			break;

		case 'destination':
			# code...
			break;
	}
?>