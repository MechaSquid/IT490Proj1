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

		$stmt = $conn->prepare("SELECT * FROM `Aircraft`");
		$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aircraft Results</title>
 	<link rel="stylesheet" type="text/css" href="../css/main.css"> 
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
  <link href="https://fonts.googleapis.com/css?family=Hind|Passion+One" rel="stylesheet">
</head>
<body>
	<div class="container" id="mainContainer">
	
 <a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/" style="text-decoration:none;">
    <div class="header">
	   <h1>Wrong Way Airlines</h1>   
	  </div>
 </a>

 
    <div class="nav_bar">
      <ul>      
        <li><a href="../index.php">Flight Search</a></li>
	      <li><a href="../index.php">Cargo Search</a></li>
 		    <li><a href="../admin_func.inc.php">Admin login</a></li>      
      </ul>  
    </div>
 <div class="container">
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
 </div>
</body>
</html>



<?php
	} //end if statement
?>