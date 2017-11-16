
var count=0;

function addNext() {
	count++;
    var li = document.createElement("LI");
    var t = document.createTextNode(count);
	li.appendChild(t);
	document.getElementById("lista").appendChild(li);
}

function addFirst() {
	count++;
    var li = document.createElement("LI");
    var t = document.createTextNode(count);
	li.appendChild(t);
	var list = document.getElementById("lista");
	list.insertBefore(li, list.firstChild);
}

function changeLast() {
	count++;
    var li = document.createElement("LI");
    var t = document.createTextNode(count);
	li.appendChild(t);
	var list = document.getElementById("lista");
	list.replaceChild(li, list.lastChild);
}

function deleteLast() {
	if(count>0) {
		count--;
	}
	var list = document.getElementById("lista");
	list.removeChild(list.lastChild);
}

function deleteButtons() {
	var out = document.getElementById("outer");
	var button = out.lastChild;
	button.parentNode.style.display = "none";
}