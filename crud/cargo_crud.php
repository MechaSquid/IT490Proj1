<script src="../js/scripts.js"></script>
<div id="add-cargo">
	<form action="../support/insert_cargo.php" method="POST">
		<label for="skid-id">Skid ID</label>
		<input type="number" id="skid-id" name="skid-id" maxlength="4" required>
		<label for="skid-weight">Skid Weight</label>
		<input type="text" id="skid-weight" name="skid-weight" maxlength="4" required>
		<label for="skid-contents">Skid Contents</label>
		<input type="number" id="skid-contents" name="skid-contents" required>
		<button>Insert Cargo</button>
	</form>
</div>
<div id="update-cargo">
	<form action="../support/update_cargo.php" method="POST">
		<label for="skid-id2">Skid ID</label>
		<input type="text" list="skid-id2s" id="skid-id2" name="skid-id2" onfocus="pullFlightChoices(this.name)">
		<datalist id="skid-id2s"></datalist>
		<label for="skid-weight2">Skid Weight</label>
		<input type="text" id="skid-weight2" name="skid-weight2" required>
		<label for="skid-contents2">Skid Contents</label>
		<input type="number" id="skid-contents2" name="skid-contents2" maxlength="4" required>
		<button>Update Cargo</button>
	</form>
</div>
<div id="delete-cargo">
	<form action="../support/delete_cargo.php" method="POST">
		<label for="skid-id3">Skid ID</label>
		<input type="text" list="skid-id3s" id="skid-id3" name="skid-id3" onfocus="pullFlightChoices(this.name)">
		<datalist id="skid-id3s"></datalist>
		<label for="skid-weight3">Skid Weight</label>
		<input type="text" id="skid-weight3" name="skid-weight3" required>
		<label for="skid-contents3">Skid Contents</label>
		<input type="number" id="skid-contents3" name="skid-contents3" maxlength="4" required>
		<button type="button" onclick="confirmDelete(this.form)">Delete Cargo</button>
	</form>
</div>