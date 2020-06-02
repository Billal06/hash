var hash;
const url = "http://localhost:8080";

function crack(){
	hash = document.getElementById("hash");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("demo").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", url+"/api/decrypt.php?type=", true);
	xhttp.send();
}
