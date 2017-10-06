<?php 
	ini_set('display_errors', 1); //displays errors FOR TESTING ONLY

	$dsn = 'mysql:dbname=cdg9;host=sql2.njit.edu';
	$username = 'cdg9';
	$password = 'x9kbkWsY';
	$table = 'users';

	try {
		$conn = new PDO($dsn, $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo 'success';
	} catch (PDOException $e) {
		echo 'failed ' . $e->getMessage();
	}
?>