<script src="../js/scripts.js"></script>
<div id="add-flight">
	<form action="../support/insert_flight.php" method="POST">
		<label for="flight-number">Flight Number</label>
		<input type="number" id="flight-number" name="flight-number" required>
		<label for="tail-number">Tail Number</label>
		<input type="text" id="tail-number" name="tail-number" required>
		<label for="air-crew">Air Crew</label>
		<input type="number" id="air-crew" name="air-crew" required>
		<label for="destination">destination</label>
		<input type="number" id="destination" name="destination" required>
		<label for="origin">origin</label>
		<input type="number" id="origin" name="origin" required>
		<label for="cargo">cargo</label>
		<input type="number" id="cargo" name="cargo" required>
		<label for="depart-time">depart-time</label>
		<input type="number" id="depart-time" name="depart-time" required>
		<label for="arrive-time">arrive-time</label>
		<input type="number" id="arrive-time" name="arrive-time" required>
		<button>Insert flight</button>
	</form>
</div>
<div id="update-flight">
	<form action="../support/update_flight.php" method="POST">
		<label for="flight-number2">Flight Number</label>
		<input type="text" list="flight-number2s" id="flight-number2" name="flight-number2" onfocus="pullFlightChoices(this.name)">
		<datalist id="flight-number2s"></datalist>
		<label for="tail-number2">Tail Number</label>
		<input type="text" id="tail-number2" name="tail-number2" required>
		<label for="air-crew2">Air Crew</label>
		<input type="number" id="air-crew2" name="air-crew2" required>
		<label for="destination2">destination</label>
		<input type="number" id="destination2" name="destination2" required>
		<label for="origin2">origin</label>
		<input type="number" id="origin2" name="origin2" required>
		<label for="cargo2">cargo</label>
		<input type="number" id="cargo2" name="cargo2" required>
		<label for="depart-time2">depart-time</label>
		<input type="number" id="depart-time2" name="depart-time2" required>
		<label for="arrive-time2">arrive-time</label>
		<input type="number" id="arrive-time2" name="arrive-time2" required>
		<button>Update flight</button>
	</form>
</div>
<div id="delete-flight">
	<form action="../support/delete_flight.php" method="POST">
		<label for="flight-number3">Flight Number</label>
		<input type="text" list="flight-number3s" id="flight-number3" name="flight-number3" onfocus="pullFlightChoices(this.name)">
		<datalist id="flight-number3s"></datalist>
		<label for="tail-number3">Tail Number</label>
		<input type="text" id="tail-number3" name="tail-number3" required>
		<label for="air-crew3">Air Crew</label>
		<input type="number" id="air-crew3" name="air-crew3" required>
		<label for="destination3">destination</label>
		<input type="number" id="destination3" name="destination3" required>
		<label for="origin3">origin</label>
		<input type="number" id="origin3" name="origin3" required>
		<label for="cargo3">cargo</label>
		<input type="number" id="cargo3" name="cargo3" required>
		<label for="depart-time3">depart-time</label>
		<input type="number" id="depart-time3" name="depart-time3" required>
		<label for="arrive-time3">arrive-time</label>
		<input type="number" id="arrive-time3" name="arrive-time3" required>
		<button type="button" onclick="confirmDelete(this.form)">Delete flight</button>
	</form>
</div>