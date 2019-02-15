//JSON
//let user = {
//	nama: "Handri",
//	nip : "130695",
//	email: "hand@mail.com"
//}

//console.log(JSON.stringify(user));

//Javascript
//let xhr = new XMLHttpRequest();
//xhr.onreadystatechange = function() {
//	if (xhr.readyState == 4 && xhr.status == 200) {
//		let user = JSON.parse(this.responseText); //hasilnya object
//		let user = this.responseText; //hasilnya json
//		console.log(user);
//	}
//}

//xhr.open('GET', 'satu.json', true);
//xhr.send();

//jQuery
$.getJSON('satu.json', function(user) {
	console.log(user);
});
