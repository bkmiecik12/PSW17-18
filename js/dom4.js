function isKeyPressed(event) {
	if (event.ctrlKey) {
		var x = document.images;
		for(var i = 0; i < x.length; i++) {
			x.item(i).style.width = "45px";
			x.item(i).style.height = "67px";
		}
	}
	if (event.altKey) {
		var x = document.images;
		for(var i = 0; i < x.length; i++) {
			x.item(i).style.width = "90px";
			x.item(i).style.height = "134px";
		}
	}
	if (event.shiftKey) {
		var x = document.images;
		for(var i = 0; i < x.length; i++) {
			x.item(i).style.width = "135px";
			x.item(i).style.height = "201px";
		}
	}
	var cX = event.clientX;
    var sX = event.screenX;
    var cY = event.clientY;
    var sY = event.screenY;
    var coords1 = "Pozycja na stronie - X: " + cX + ", Y coords: " + cY;
    var coords2 = "Pozycja na ekranie - X: " + sX + ", Y coords: " + sY;
    document.getElementById("wspolrzedne").innerHTML = coords1 + "<br>" + coords2;
}

function keyCode(event) {
    var x = event.keyCode;
    if (x == 75) {
        var list = document.getElementsByClassName("rok");
		var d = new Date();
		var n = d.getFullYear();
		for(var i = 0; i < list.length; i++) {
			list.item(i).innerHTML = n-list.item(i).innerHTML;
		}
    }
}