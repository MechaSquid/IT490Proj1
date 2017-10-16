<?php 
	session_start();
	$_SESSION['logged_in'] = true; // for testing only
	if ($_SESSION['logged_in']) {
		$dsn = 'mysql:dbname=cdg9;host=sql2.njit.edu';
		$username = 'cdg9';
		$password = 'x9kbkWsY';
		try {
			$conn = new PDO($dsn, $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'failed ' . $e->getMessage();
		} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script>
		
	</script>
</head>
<body>
	
</body>
</html>


<?php
	} //end if statement
?>