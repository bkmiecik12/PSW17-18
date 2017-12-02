<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Recenzje filmów - Wypełnij formularz dodatkowy</title>
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
  
	<form method = "post" action = "index.html" autocomplete="on">
	
	<p><label>Ulubiony kolor:
	<input type="color" name="favcolor">
	</label></p>
	
	<p><label>Od kiedy interesujesz się kinem:
	<input type="month" name="favmonth">
	</label></p>
	
	<p><label>Jak bardzo znasz się na kinie:
	<input type="range" name="favrange" min="1" max="10">
	</label></p>
	
	<p><label>Znajdz ulubiony film:
	<input type="search" name="favmovie" placeholder="Podaj nazwe filmu">
	</label></p>
	
	<p><label>Dodaj swojego bloga:
	<input type="url" name="favblog" placeholder="Podaj adres bloga">
	</label></p>
	
<p>
 <input type = "submit" value = "Wyślij">
 <input type = "reset" value = "Wyczyść">
</p>
 </form>
</body>
</html>
