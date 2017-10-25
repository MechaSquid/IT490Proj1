

<html>
<head>
	<title>Wrong Way Airlines Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
  <link href="https://fonts.googleapis.com/css?family=Hind|Passion+One" rel="stylesheet">
</head>
  
  
  <body>
  	<div class="container">
   
      <div class="header">
  	   <h1>Wrong Way Airlines</h1>
  	  </div>
       
      <div class="nav_bar">
        <ul>
          <li><a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/index.php">Flight Search</a></li>
  	      <li><a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/index.php">Cargo Search</a></li>
   		    <li><a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/index.php">Admin login</a></li>
        </ul>
      </div>

</html>





<?php
  $from = $_POST['flight_from'];
  $to = $_POST['flight_to'];
  
  //connect to DB
  $hostname = "sql2.njit.edu"   ;
  $username = "cdg9" ;
  $project  = "cdg9"   ;
  $password = "x9kbkWsY" ;
  
  $con = mysql_connect($hostname, $username, $password);
  if (!$con)
  {
    die('Database not connected');
  }
  $db_selected = mysql_select_db($project);
  if ($db_selected)
  {
    //print("connected to DB<br>");
  }
  
  
  //query to DB
          
 $testQuery = "
 		SELECT Flight_number, Operating_aircraft, Air_crew, To_airport, From_airport, Cargo_carried, Departure_time, Arrival_time
		FROM Flight 
		JOIN Airport AS dst
		ON To_airport=dst.Airport_Code
		JOIN Airport AS org
		ON From_airport=org.Airport_Code
		WHERE dst.State_Abbrev = '$to'
		AND org.State_Abbrev = '$from'
";
  $testResult = mysql_query($testQuery);
  
  
  //see if any results
  
if (mysql_num_rows($testResult)==0)
{
  echo "<br><b>Sorry no available flights from $from to $to</b>";
} 
else
{

   echo "<br><b>Here are available flights from $from to $to</b><br>";
  //make table
  echo"<br><table width='600' border='1' cellpadding='1' cellspacing='1'>";
  echo"<tr> 
            <th> Flight_number </th>   
            <th> Operating_aircraft </th>   
            <th> Air_crew </th>  
            <th> To_airport </th>  
            <th> From_airport </th> 
            <th> Cargo_carried </th> 
            <th> Departue_time </th> 
            <th> Arrival_time </th> 
        </tr>";
        

  
  while($a = mysql_fetch_array($testResult))
  {
    echo"<tr>";
    echo"<td>".$a['Flight_number']. "</td>";
    echo"<td>".$a['Operating_aircraft']. "</td>";
    echo"<td>".$a['Air_crew']. "</td>";
    echo"<td>".$a['To_airport']. "</td>";
    echo"<td>".$a['From_airport']. "</td>";
    echo"<td>".$a['Cargo_carried']. "</td>";
    echo"<td>".$a['Departure_time']. "</td>";
    echo"<td>".$a['Arrival_time']. "</td>";
    
    echo"</tr>";
  }
  
  echo"</table>";
}



print"<br><br>";


?>




