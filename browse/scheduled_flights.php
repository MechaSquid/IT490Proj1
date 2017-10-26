<?php
	session_start();
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

		$stmt = $conn->prepare("SELECT * FROM `Flight`");
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
			<th>Flight #</th>
			<th>Tail #</th>
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
	} //end if statement
?>