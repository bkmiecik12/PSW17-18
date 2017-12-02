function changeBackground(x) {
	document.body.style.backgroundImage='none';
	var opt = x.options[x.selectedIndex].text;
	document.body.style.backgroundColor = opt;
}

function changeText(x) {
	var opt = x.options[x.selectedIndex].text;
	document.body.style.color = opt;
}

function changeFont(x) {
	var opt = x.options[x.selectedIndex].text;
	document.body.style.fontFamily = opt;
}