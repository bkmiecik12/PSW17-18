
var hour;
var min;
var sec;

window.onload = function(){

    person = window.prompt("Podaj swoje imię","Harry Potter");
    if (person != null) {
        document.getElementById("imie").innerHTML = person + "! Witaj na naszej witrynie! Tutaj ocenisz każdy film";
        window.alert("Witaj " + person + "! Miłej lektury ;)");
    }

    wypisz();
}

function wypisz(){
    var dzis = new Date();
    hour = dzis.getHours();
    min = dzis.getMinutes();
    sec = dzis.getSeconds();
    
    document.getElementById("zegar").innerHTML=hour+":"+min+":"+sec;

    setTimeout("wypisz()",1000);
}