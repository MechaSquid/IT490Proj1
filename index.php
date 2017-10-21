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
            <option value="AL">Alabama</option>
          	<option value="AK">Alaska</option>
          	<option value="AZ">Arizona</option>
          	<option value="AR">Arkansas</option>
          	<option value="CA">California</option>
          	<option value="CO">Colorado</option>
          	<option value="CT">Connecticut</option>
          	<option value="DE">Delaware</option>
          	<option value="DC">District Of Columbia</option>
          	<option value="FL">Florida</option>
          	<option value="GA">Georgia</option>
          	<option value="HI">Hawaii</option>
          	<option value="ID">Idaho</option>
          	<option value="IL">Illinois</option>
          	<option value="IN">Indiana</option>
          	<option value="IA">Iowa</option>
          	<option value="KS">Kansas</option>
          	<option value="KY">Kentucky</option>
          	<option value="LA">Louisiana</option>
          	<option value="ME">Maine</option>
          	<option value="MD">Maryland</option>
          	<option value="MA">Massachusetts</option>
          	<option value="MI">Michigan</option>
          	<option value="MN">Minnesota</option>
          	<option value="MS">Mississippi</option>
          	<option value="MO">Missouri</option>
          	<option value="MT">Montana</option>
          	<option value="NE">Nebraska</option>
          	<option value="NV">Nevada</option>
          	<option value="NH">New Hampshire</option>
          	<option value="NJ">New Jersey</option>
          	<option value="NM">New Mexico</option>
          	<option value="NY">New York</option>
          	<option value="NC">North Carolina</option>
          	<option value="ND">North Dakota</option>
          	<option value="OH">Ohio</option>
          	<option value="OK">Oklahoma</option>
          	<option value="OR">Oregon</option>
          	<option value="PA">Pennsylvania</option>
          	<option value="RI">Rhode Island</option>
          	<option value="SC">South Carolina</option>
          	<option value="SD">South Dakota</option>
          	<option value="TN">Tennessee</option>
          	<option value="TX">Texas</option>
          	<option value="UT">Utah</option>
          	<option value="VT">Vermont</option>
          	<option value="VA">Virginia</option>
          	<option value="WA">Washington</option>
          	<option value="WV">West Virginia</option>
          	<option value="WI">Wisconsin</option>
          	<option value="WY">Wyoming</option>
          </select>
          &nbsp;&nbsp;&nbsp;&nbsp;
          
          <label class="To">To</label>
          <select name="flight_to">
            <option value="" selected disabled>Please select an option...</option>
            <option value="AL">Alabama</option>
          	<option value="AK">Alaska</option>
          	<option value="AZ">Arizona</option>
          	<option value="AR">Arkansas</option>
          	<option value="CA">California</option>
          	<option value="CO">Colorado</option>
          	<option value="CT">Connecticut</option>
          	<option value="DE">Delaware</option>
          	<option value="DC">District Of Columbia</option>
          	<option value="FL">Florida</option>
          	<option value="GA">Georgia</option>
          	<option value="HI">Hawaii</option>
          	<option value="ID">Idaho</option>
          	<option value="IL">Illinois</option>
          	<option value="IN">Indiana</option>
          	<option value="IA">Iowa</option>
          	<option value="KS">Kansas</option>
          	<option value="KY">Kentucky</option>
          	<option value="LA">Louisiana</option>
          	<option value="ME">Maine</option>
          	<option value="MD">Maryland</option>
          	<option value="MA">Massachusetts</option>
          	<option value="MI">Michigan</option>
          	<option value="MN">Minnesota</option>
          	<option value="MS">Mississippi</option>
          	<option value="MO">Missouri</option>
          	<option value="MT">Montana</option>
          	<option value="NE">Nebraska</option>
          	<option value="NV">Nevada</option>
          	<option value="NH">New Hampshire</option>
          	<option value="NJ">New Jersey</option>
          	<option value="NM">New Mexico</option>
          	<option value="NY">New York</option>
          	<option value="NC">North Carolina</option>
          	<option value="ND">North Dakota</option>
          	<option value="OH">Ohio</option>
          	<option value="OK">Oklahoma</option>
          	<option value="OR">Oregon</option>
          	<option value="PA">Pennsylvania</option>
          	<option value="RI">Rhode Island</option>
          	<option value="SC">South Carolina</option>
          	<option value="SD">South Dakota</option>
          	<option value="TN">Tennessee</option>
          	<option value="TX">Texas</option>
          	<option value="UT">Utah</option>
          	<option value="VT">Vermont</option>
          	<option value="VA">Virginia</option>
          	<option value="WA">Washington</option>
          	<option value="WV">West Virginia</option>
          	<option value="WI">Wisconsin</option>
          	<option value="WY">Wyoming</option>
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
