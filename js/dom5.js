var helpArr = [ 
"Podaj pełną nazwę użytkownika.",
"Podaj pełną nazwę filmu",
"Wpisz tu treść swojej recenzji, tylko bez wulgaryzmów :)"
,"Wybierz gatunek filmu"
,"Wybierz czy chcesz zapamiętać tą recenzję czy nie",
"Twoja ocena w skali od 1 do 10",
"Ten przycisk wyśle dane na serwer",
"Ten przycisk wyczyści wszystko co wprowadziłeś !",
""
];
var help;

function init() {
	help=document.getElementById("help");
	var count=0;
	registerListeners(document.getElementById("user"),count++);
	registerListeners(document.getElementById("title"),count++);
	registerListeners(document.getElementById("review"),count++);
	var categories = document.getElementsByClassName("category");
	for(var i = 0; i < categories.length; i++)
		registerListeners(categories.item(i),count);
	count++;
	var saving = document.getElementsByClassName("ifSave");
	for(var i = 0; i < saving.length; i++)
		registerListeners(saving.item(i),count);
	count++;
	registerListeners(document.getElementById("ocena"),count++);
}

function registerListeners(object,msg) {
	object.addEventListener("focus",function() {help.innerHTML=helpArr[msg];},false);
	object.addEventListener("blur",function() {help.innerHTML=helpArr[8];},false);
}

window.addEventListener("load",init,false);

function confirm_reset() {
    return confirm(helpArr[7]);
}

function confirm_send() {
    return confirm(helpArr[6]);
}