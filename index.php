<Doctype html>
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
        <li><a href="#search_by_destination">Flight Search</a></li>
	      <li><a href="#search_by_cargo">Cargo Search</a></li>
 		    <li><a href="#admin">Admin login</a></li>
      </ul>
    </div>
    
      <img src="airplane.jpg" alt="airplane image">
      <br><br><br>
      
 
     
    <div class=forms>
      <form action='flightResults.php' method='post'>
        <fieldset id="f1"><a name="search_by_destination"></a>
          <legend>Search by destination</legend>
          
          <label class="From">From</label>
          <select name="flight_from">
            <option value="" selected disabled>Please select an option...</option>
            <option>New Jersey</option>
            <option>New York</option>
            <option>Maryland</option>
          </select>
          &nbsp;&nbsp;&nbsp;&nbsp;
          
          <label class="To">To</label>
          <select name="flight_to">
            <option value="" selected disabled>Please select an option...</option>
            <option>New Jersey</option>
            <option>New York</option>
            <option>Maryland</option>
          </select>
          &nbsp;&nbsp;&nbsp;&nbsp;
          
          <label class="Number of Passengers">Number of passengers</label>
            <input type="number" name="number_of_passengers" min="1" max="255" value="1">
          
          
          <br><br><br><br><br><br><br><br><br>
          
          <label class="Depart">Depart</label>
            <input type = "date"  name="Depart_date" > &nbsp;&nbsp;&nbsp;&nbsp;
          <label class="Return">Return</label>
            <input type="date" name="Return_date">
            <br><br><br><br><br><br><br>
            
            <label class="submit_button"</label>
            <input type = submit value="Search" name="flight_search">
            
        </fieldset>
      </form>
        
        
    
        
      <form action='cargoResults.php'>
        <fieldset id="f2"><a name="search_by_cargo"></a>
          <legend>Search by cargo</legend>
          <p>Find which flight is carrying your cargo</p>
          
          <label class="Cargo">Cargo ID</label>
          <input type = text  name="Cargo_ID" maxlength="4" autocomplete="off" placeholder="Enter Cargo ID here" required>
          <input type = submit value="Search" name="cargo_search">
          <br><br><br><br><br><br><br>  
       </form>
    
    </div>
	</div>
 

</body>
</html>
