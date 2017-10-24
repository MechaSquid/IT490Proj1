<html>


  <style type="text/css">
  	.header h1 {text-align: center;}
     ul{
         list-style-type: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
         background-color: #333;
        }
     li {
         float: left;
        }
     li a 
        {
         display: block;
         color: white;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
        }
     li a:hover 
        {
         background-color: #111;
        }
     img {margin-left: auto; margin-right: auto; width: 100%;}
     .submit_button {float: right;}
     
  </style>
  
  
  <head>
  	<title>Wrong Way Airlines Home Page</title>
  </head>
  
  
  <body>
  	<div class="container">
   
      <div class="header">
  	   <h1>Wrong Way Airlines</h1>
  	  </div>
       
      <div class="nav_bar">
        <ul>
          <li><a href="https://web.njit.edu/~az66/download">Flight Search</a></li>
  	      <li><a href="https://web.njit.edu/~az66/download">Cargo Search</a></li>
   		    <li><a href="https://web.njit.edu/~az66/download">Admin login</a></li>
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
