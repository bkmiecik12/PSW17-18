<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Recenzje filmów - Wypełnij formularz</title>
  <meta name="description" content="Recenzje filmów">
  <meta name="keywords" content="Film, ranking, recenzja, premiery">
  <link rel = "stylesheet" type = "text/css" href = "style/styles.css">
  
  <script src="js/dom3.js"></script>
  
  <!--aaa-->
</head>

<body>
<div id='topmain'>
  <h1>Recenzje filmów</h1>
  <p>Witaj na naszej witrynie! Tutaj ocenisz każdy film</p>
  </div>
  <nav>
	<ul>
	<li><a href="index.php">Start</a></li>
	<li><a href="ranking.php">Ranking filmów</a></li>
	<li><a href="najnowsze.php">Najnowsze recezje</a></li>
	<li><a href="dodaj.php">Dodaj recenzję</a></li>
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
  
<form method = "post" action = "formularzAction.php" autocomplete="on">
	<p><label>Imię:
 	<input name = "name" type = "text" value="Jan" autofocus>
	</label>Tekst do 20 znaków</p>
 
  <p><label>Nazwisko:
 	<input name = "nazwisko" type = "text" value="Kowalski" required>
 </label>Tekst do 20 znaków</p>
 
 <p><label>Miesiąc urodzin:
 <input list="miesiac" name="miesiac">
<datalist id="miesiac">
	<option value="Styczen">
	<option value="Luty">
	<option value="Marzec">
	<option value="Kwiecen">
	<option value="Maj">
	<option value="Czerwiec">
	<option value="Lipiec">
	<option value="Sierpien">
	<option value="Wrzesien">
	<option value="Pazdziernik">
	<option value="Listopad">
	<option value="Grudzien">
</datalist>
</label>Lista wybieralna</p>

<p><label>Email:
 	<input name = "email" type = "email" size = "20" value="jan.kowalski@wp.pl" required>
 </label>Zgodnie ze wzorem adresu email</p>
 
 <p><label>Telefon:
 	<input name = "telefon" type = "tel" size = "20" value="666-666-666">
 </label>Zgodnie ze wzorem numeru telefonu (XXX-XXX-XXX)</p>
 
 <p><label>Ulubione kultowe filmy (zaznacz conajmniej 2):<br>
 <select multiple="yes" name="cult[]">
  <option value="Pulp Fiction">Pulp Fiction</option>
  <option value="Podziemny Krąg">Podziemny Krąg</option>
  <option value="Łowca androidów">Łowca androidów</option>
  <option value="Człowiek z blizną">Człowiek z blizną</option>
  <option value="Seksmisja">Seksmisja</option>
</select>
</label></p>
	
<p>
 <input type = "submit" value = "Wyślij">
 <input type = "reset" value = "Wyczyść">
</p>
 </form>
</body>
</html>
