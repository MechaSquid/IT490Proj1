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
          <li><a href="homepage.html">Flight Search</a></li>
  	      <li><a href="homepage.html">Cargo Search</a></li>
   		    <li><a href="#admin">Admin login</a></li>
        </ul>
      </div>

</html>





<?php


  $from = $_POST['flight_from'];
  $to = $_POST['flight_to'];
  echo "<br><b>Here are available flights from $from to $to</b><br>";



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
    print("connected to DB<br>");
  }
  

  

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
  
if($_GET['flight_search'])
  print "Here is list of flights";
  
print"<br><br>";


?>
