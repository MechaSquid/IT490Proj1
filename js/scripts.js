function pullFlightChoices(e) {
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
// function insertAircraft() {
// 	const tail = document.getElementById('tail-number').value;
// 	const airtype = document.getElementById('aircraft-type').value;
// 	const fuel = document.getElementById('fuel-amount').value;
// 	const xhr = new XMLHttpRequest();
// }
function confirmDelete(e) {
	if (confirm("Are you sure you want to DELETE?")) {
		e.submit();
	}
}