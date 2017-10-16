<?php 
	$dsn = 'mysql:dbname=cdg9;host=sql2.njit.edu';
	$username = 'cdg9';
	$password = 'x9kbkWsY';
	
	try {
		$conn = new PDO($dsn, $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo 'failed ' . $e->getMessage();
		return;
	}