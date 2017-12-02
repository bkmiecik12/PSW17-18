<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Recenzje filmów - Walidacja formularza</title>
  <meta name="description" content="Recenzje filmów">
  <meta name="keywords" content="Film, ranking, recenzja, premiery">
  <link rel = "stylesheet" type = "text/css" href = "style/styles.css">
  
  <script src="js/dom3.js"></script>

  <!--aaa-->
</head>

<body>
<div id='topmain'>
  <h1>Recenzje filmów</h1>
  <p>Walidacja formularza</p>
</div>
  <nav>
  <ul>
  <li><a href="index.php">Start</a></li>
  <li><a href="ranking.php">Ranking filmów</a></li>
  <li><a href="najnowsze.php">Najnowsze recenzje</a></li>
  <li><a href="formularz.php">Dołącz do grona kinomaniaków !</a></li>
	</ul>
	</nav>

<form method = "post" action = "cookies.php">  
  Kolor tła:<select onchange="changeBackground(this);" id="tlo" name="tlo">
	<option selected>#ddd</option>
    <option>lightblue</option>
	<option>yellow</option>
	<option>white</option>
  </select>
  Kolor czcionki:<select onchange="changeText(this);" id="tekst" name="tekst">
	<option selected>black</option>
    <option>red</option>
	<option>yellow</option>
	<option>green</option>
  </select>
  Rodzaj czcionki:<select onchange="changeFont(this);" id="czcionka" name="czcionka">
	<option selected>Times New Roman</option>
    <option>Arial</option>
	<option>Impact</option>
	<option>Courier New</option>
  </select>
<input type="submit" name="submitstyle" value="Zapisz styl">  
</form>

  <?php
	if(isset($_COOKIE["tlo"]) || isset($_COOKIE["tekst"]) || isset($_COOKIE["czcionka"]))
	{
		$styleBlock = sprintf('
			<style type="text/css">
				body {
				background-color:%s;
				color:%s;
				font-family:%s;
				}
			</style>
		', $_COOKIE["tlo"], $_COOKIE["tekst"], $_COOKIE["czcionka"]);
		echo $styleBlock;
	}
  ?>
  
<p>Twoje imię: 
<?php 
	$name = $_POST["name"];
	if(strlen($name)>20) {
		die("Za duża liczba znaków dla imienia !");
	}
	else {
		print($name);
	}
?>
</p>
<p>Twoje nazwisko: 
<?php 
	$nazwisko = $_POST["nazwisko"];
	if(strlen($nazwisko)>20) {
		die("Za duża liczba znaków dla nazwiska !");
	}
	else {
		print($nazwisko);
	}
?>
</p>
<p>Twój login: 
<?php 
	define("SEP","-");
	$los=rand(1,50);
	$login= $_POST["name"].SEP.$_POST["nazwisko"];
	$los+=strlen($login);
	settype($los,"string");
	echo $login, SEP, (string)$los
?>
</p>
<p>Pora, w jakiej się urodziłeś: 
<?php 
	$miesiac=$_POST["miesiac"];	
	switch($miesiac) {
	case "Styczen":
		echo("Zima");
		break;
	case "Luty":
		echo("Zima");
		break;
	case "Marzec":
		echo("Wiosna");
		break;
	case "Kwiecen":
		echo("Wiosna");
		break;
	case "Maj":
		echo("Wiosna");
		break;
	case "Czerwiec":
		echo("Lato");
		break;
	case "Lipiec":
		echo("Lato");
		break;
	case "Sierpien":
		echo("Lato");
		break;
	case "Wrzesien":
		echo("Jesien");
		break;
	case "Pazdziernik":
		echo("Jesien");
		break;
	case "Listopad":
		echo("Jesien");
		break;
	case "Grudzien":
		echo("Zima");
		break;
	default:
		echo("Nie podałeś nam miesiąca !");
	}
?>
</p>
<p>Polecane filmy na pory roku: 
<?php 
	$map = ["Zima" => "Kevin sam w domu",
	"Wiosna" => "Nowy rok, nowy Ty",
	"Lato" => "Wakacje żegnaj szkoło",
	"Jesień" => "Kiedy opadają liście"];
	foreach($map as $key=>$value) {
		echo "<br>",$key, " => ", $value;
	}
?>
</p>  
<p>Domena maila: 
<?php 
	$email=$_POST["email"];
	for ($i = 0; $i < strlen($email); $i++){
		if($email[$i]=="@") {
			echo substr($email,$i+1,strlen($email));
			break;
		}
	}
	if(substr($email,strlen($email)-2,strlen($email))=="pl") {
		echo " => \"Polska\" domena !";
	}
	else {
		echo " => \"Obca\" domena !";
	}
?>
</p>
<p>Podany numer telefonu: 
<?php 
	$telefon=$_POST["telefon"];
	if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/",$telefon)) {
		echo preg_replace("/-/"," ",$telefon);
	}
?>
</p>
<p>Wybrane kultowe filmy: 
<?php 
	
	$cult = $_POST['cult'];
	if(count($cult)<2) {
		print("Nie wybrałeś 2 kultowych filmów !");
	}
	else {
		if(count($cult)==5) {
			print("Ooo, prawdziwy z Ciebie kinoman !: ");
		}
		foreach($cult AS $value) {
			echo $value.", ";
		}
	}
?>
</p>
<p>URL formularza: 
<?php	
	echo $_SERVER['HTTP_REFERER'];
?>
</p>
</body>
</html>
