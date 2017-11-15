function showStats() {
	var x = document.images.length;
	document.getElementById("images").innerHTML = 'Liczba okładek: ' + x;
	x = document.links.length;
	document.getElementById("links").innerHTML = 'Liczba linków do opisu: ' + (x-4)/2;
	x = document.links.item(5).href;
    document.getElementById("best").innerHTML = 'Najlepiej oceniany film: ' + x;
}

function modifyForms() {
	var x = document.forms;
	x.item(0).style='background-color: red';
	x.namedItem('ocena').style.display = 'none';
}