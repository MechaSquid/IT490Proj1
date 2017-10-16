<?php 
	include '.db_login.php';
	$request_body = file_get_contents('php://input');
	$request = json_decode($request_body);
	echo $request->browse;
?>