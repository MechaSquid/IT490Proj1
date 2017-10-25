<html>

     

  
  
 <head>
	<title>Wrong Way Airlines Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
  <link href="https://fonts.googleapis.com/css?family=Hind|Passion+One" rel="stylesheet">
</head>
  
  
  <body>
  	<div class="container">
   
       <a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/" style="text-decoration:none;">
    <div class="header">
	   <h1>Wrong Way Airlines</h1>   
	  </div>
     </a>
       
      <div class="nav_bar">
        <ul>
          <li><a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/index.php">Flight Search</a></li>
  	      <li><a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/index.php">Cargo Search</a></li>
   		    <li><a href="https://web.njit.edu/~ejc23/download/it490_edward/IT490Proj1/index.php">Admin login</a></li>
        </ul>
      </div>

</html>




<?php


  $cargo_ID = $_GET['Cargo_ID'];

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
  $testQuery = "SELECT * FROM Flight WHERE Cargo_carried LIKE '$cargo_ID'";
  $testResult = mysql_query($testQuery);
  
if (mysql_num_rows($testResult)==0)
{
  echo"<br><b>Sorry, we do not have any flights carrying that cargo.</b>";

}
else
{
   echo"<br><b>Here is the flight carrying the cargo: $cargo_ID</b><br>";
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
  
  
  
?>
