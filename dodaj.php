<?php
	if(!isset($_SESSION['login']))
		header('Location: index.php');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Recenzje filmów - Dodaj recenzję</title>
  <meta name="description" content="Recenzje filmów">
  <meta name="keywords" content="Film, ranking, recenzja, premiery">
  <link rel = "stylesheet" type = "text/css" href = "style/styles.css">
  
  <script src="js/dom3.js"></script>
  
  <script src="js/dom5.js"></script>

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
	
	<form method = "post" action = "newreview.php">

 <p><label>Użytkownik:
 	<input id="user" name = "user" type = "text" size = "30">
 </label></p>
 
 <p><label>Tytuł filmu:
 	<input id="title" name = "title" type = "text" size = "30">
 </label></p>

 <p><label>Treść recenzji:
 
 <textarea id="review" name = "review" cols="25" rows="6"></textarea>


 </label></p>
 <p>
 <strong>Kategorie:</strong><br>
 			<label>Dramat
			<input class="category" name = "category[]" type = "checkbox"
				value = "Dramat"></label>
			<label>Komedia
			<input class="category" name = "category[]" type = "checkbox"
				value = "Komedia"></label>
			<label>Horror
			<input class="category" name = "category[]" type = "checkbox"
				value = "Horror"></label>
			<label>Thriller
			<input class="category" name = "category[]" type = "checkbox"
				value = "Thriller"></label>
			<label>Film akcji
			<input class="category" name = "category[]" type = "checkbox"
				value = "Film akcji"></label>
			<label>Familijny
			<input class="category" name = "category[]" type = "checkbox"
				value = "Familijny"></label>
 
 </p>
 
 <p>
 <label>Zapisać w moich recenzjach?</label>
 
 <label>Tak
 <input class="ifSave" name = "save" type = "radio"
 	value = "yes" checked></label>
 
 <label>Nie
 <input class="ifSave" name = "save" type = "radio" value = "no"/></label>
 </p>

 <p>
 <label>Oceń film:
		<select id="ocena" name = "rating">
			<option selected>10</option>
			<option>9</option>
			<option>8</option>
			<option>7</option>
			<option>6</option>
			<option>5</option>
			<option>4</option>
			<option>3</option>
			<option>2</option>
			<option>1</option>
		</select>
 </label>
 </p>

 <p id="help"></p>
 
 <p>
 <input id="submit" type = "submit" value = "Wyślij" onclick="return confirm_send();">
 <input id="reset" type = "reset" value = "Wyczyść" onclick="return confirm_reset();">
 </p>
 </form>
	
</body>
</html>
