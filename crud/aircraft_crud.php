<script src="../js/scripts.js"></script>
<div id="add-aircraft">
	<form action="../support/insert_aircraft.php" method="POST">
		<label for="tail-number">Tail Number</label>
		<input type="number" id="tail-number" name="tail-number" maxlength="5" required>
		<label for="aircraft-type">Aircraft Type</label>
		<input type="text" id="aircraft-type" name="aircraft-type" maxlength="4" required>
		<label for="fuel-amount">Fuel Amount</label>
		<input type="number" id="fuel-amount" name="fuel-amount" maxlength="5" required>
		<button>Insert Aircraft</button>
	</form>
</div>
<div id="update-aircraft">
	<form action="../support/update_aircraft.php" method="POST">
		<label for="tail-number2">Tail Number</label>
		<input type="text" list="tail-number2s" id="tail-number2" name="tail-number2" onfocus="pullFlightChoices(this.name)">
		<datalist id="tail-number2s"></datalist>
		<label for="aircraft-type2">Aircraft Type</label>
		<input type="text" id="aircraft-type2" name="aircraft-type2" maxlength="4" required>
		<label for="fuel-amount2">Fuel Amount</label>
		<input type="number" id="fuel-amount2" name="fuel-amount2" maxlength="5" required>
		<button>Update Aircraft</button>
	</form>
</div>
<div id="delete-aircraft">
	<form action="../support/delete_aircraft.php" method="POST">
		<label for="tail-number3">Tail Number</label>
		<input type="text" list="tail-number3s" id="tail-number3" name="tail-number3" onfocus="pullFlightChoices(this.name)">
		<datalist id="tail-number3s"></datalist>
		<label for="aircraft-type3">Aircraft Type</label>
		<input type="text" id="aircraft-type3" name="aircraft-type3" maxlength="4" required>
		<label for="fuel-amount3">Fuel Amount</label>
		<input type="number" id="fuel-amount3" name="fuel-amount3" maxlength="5" required>
		<button type="button" onclick="confirmDelete(this.form)">Delete Aircraft</button>
	</form>
</div>