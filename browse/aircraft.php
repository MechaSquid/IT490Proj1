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

		$stmt = $conn->prepare("SELECT * FROM `Aircraft`");
		$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aircraft Results</title>
</head>
<body>
	<table>
		<tr>
			<th>Tail #</th>
			<th>Aircraft Type</th>
			<th>Fuel Amount</th>
		</tr>
		<?php 
			while ($row = $stmt->fetch()) {
				echo '<tr>';
				echo '<td>'.$row[0].'</td>';
				echo '<td>'.$row[1].'</td>';
				echo '<td>'.$row[2].'</td>';
				echo '</tr>';
			}
		?>
	</table>
</body>
</html>



<?php
	} //end if statement
?>