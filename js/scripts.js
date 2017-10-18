function pullChoices(e) {
	const xhr = new XMLHttpRequest();
	const param = {"request": e};
	const id = e + 's';
	xhr.open('POST','../support/flight_choice_script.php');
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById(id).innerHTML = xhr.responseText;
		}
	}
	xhr.send(JSON.stringify(param));
}