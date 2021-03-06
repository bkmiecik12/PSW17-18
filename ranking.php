<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Recenzje filmów</title>
  <meta name="description" content="Recenzje filmów">
  <meta name="keywords" content="Film, ranking, recenzja, premiery">
  <link rel = "stylesheet" type = "text/css" href = "style/styles.css">
  
  <script src="js/dom3.js"></script>
 
<style type="text/css">
#outer
{
    width:100%;
    text-align: center;
}
.inner
{
	float: left;
    display: inline-block;
}
</style>
 
<script src="js/dom1.js"></script>

<script src="js/dom2.js"></script>

<script src="js/dom3.js"></script>

<script src="js/dom4.js"></script>

<script type = "text/javascript">

function start(){
	var button = document.getElementById("button");

	if(button){
		button.addEventListener('click',pokaz);
	}
}

function pokaz(){

	var notes = document.getElementsByClassName("ocena");
	for(var i = 0; i < notes.length; i++)
	{
		var n = Math.random();
		n += " ";

		if(i==6) notes.item(i).innerHTML = Math.floor(9-i+Math.random()+parseInt(n)).toFixed(2);
		else
		   notes.item(i).innerHTML = (9-i+Math.random()+parseFloat(n)).toFixed(2);
		   
		notes.item(i).style.textAlign="center";
	}
}

window.addEventListener("load", start);
</script>

  <!--aaa-->
</head>

<body onmousemove="isKeyPressed(event)" onkeydown="keyCode(event)">
<div id='topmain'>
  <h1>Recenzje filmów</h1>
  <p>Witaj na naszej witrynie! Tutaj ocenisz każdy film</p>
  </div>
  <nav>
  <ul>
  	<li><a href="index.php">Start</a></li>
  	<li><a href="najnowsze.php">Najnowsze recenzje</a></li>
  	<li><a href="dodaj.php">Dodaj recenzję</a></li>
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
 
<h2>Ranking filmów</h2>
<input id="button" type="submit" value="Pokaż oceny"/><p id="test"></p>
<input type="submit" value="Pokaż statystyki" onclick="showStats()"/>
<p id="images"></p>
<p id="links"></p>
<p id="best"></p>
<form>Ulubiony film: <input type="text" name="ulubionyfilm"></form>
<br>
<form id="ocena">Twoja ocena: <input type="text" name="twojaocena" min="0" max="10" maxlength="2" size="2"></form>
<br>
<input type="submit" value="Bez oceny" onclick="modifyForms()"/><p id="test"></p>
<div id="outer">
	 <div class="inner"><input type="submit" value="Dodaj kolejny" onclick="addNext()"/></div>
	 <div class="inner"><input type="submit" value="Dodaj pierwszy" onclick="addFirst()"/></div>
	 <div class="inner"><input type="submit" value="Zamień ostatni" onclick="changeLast()"/></div>
	 <div class="inner"><input type="submit" value="Usuń ostatni" onclick="deleteLast()"/></div>
	 <div class="inner"><input type="submit" value="Usuń przyciski" onclick="deleteButtons()"/></div>
</div>
<br>
	<ul id='lista'>
	</ul>
	<p>Przytrzymaj przycisk i poruszaj kursorem, aby zmienić rozmiar okładek: ctrl (małe), alt (średnie), shift (duże).</p>
	<p>Naciśnij przycisk "k", aby zobaczyć ile lat mineło od wydania.</p>
	<p id="wspolrzedne"></p>
	<table id='tabela' border="1">
 		<thead>
  		<tr>
     		<th>Lp.</th>
     		<th colspan="3">Film</th>
		<th>Ocena</th>
  		</tr>
 		</thead>
 		<tbody>
  		<tr>
     		<td>1</td>
     		<td>
     		
     		<a download="image.jpg" href="img/skazani.jpg" title="Image">
    			<img alt="Okładka" src="img/skazani.jpg" width = "45" height = "67">
    		</a>
     		
     	</td>
     		<td><a target="_blank" 
     					href="http://www.imdb.com/title/tt0111161/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2398042102&pf_rd_r=1MHW4ZF4FQKF3BJ380CT&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_1">
     			Skazani na Shawshank</a></td>
     		<td class="rok">1994</td>
		<td class="ocena"></td>
		
  		</tr>
  		
  		
  		<tr>
     		<td>2</td>
     		<td>
     		
     		<a download="image.jpg" 
     				href="https://images-na.ssl-images-amazon.com/images/M/MV5BZTRmNjQ1ZDYtNDgzMy00OGE0LWE4N2YtNTkzNWQ5ZDhlNGJmL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UY67_CR1,0,45,67_AL_.jpg" 
     		title="Image">
    			<img alt="Okładka" 
    				src="https://images-na.ssl-images-amazon.com/images/M/MV5BZTRmNjQ1ZDYtNDgzMy00OGE0LWE4N2YtNTkzNWQ5ZDhlNGJmL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UY67_CR1,0,45,67_AL_.jpg">
    		</a>
     		
     			</td>
     		<td><a href="http://www.imdb.com/title/tt0068646/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2398042102&pf_rd_r=1MHW4ZF4FQKF3BJ380CT&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_2"
     			 target="_blank" >
     			Ojciec chrzestny</a></td>
     		<td class="rok">1972</td>
		<td class="ocena"></td>
  		</tr>
  		
  		<tr>
     		<td>3</td>
     		<td>
     		
     		<a download="image.jpg" 
     				href="https://images-na.ssl-images-amazon.com/images/M/MV5BMjZiNzIxNTQtNDc5Zi00YWY1LThkMTctMDgzYjY4YjI1YmQyL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UY67_CR1,0,45,67_AL_.jpg" 
     		title="Image">
    			<img alt="Okładka" 
    				src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjZiNzIxNTQtNDc5Zi00YWY1LThkMTctMDgzYjY4YjI1YmQyL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UY67_CR1,0,45,67_AL_.jpg">
    		</a>
     		
     			</td>
     		<td><a href="http://www.imdb.com/title/tt0071562/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2398042102&pf_rd_r=0AFDZSJRC451MA1WXMB2&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_3"
     			 target="_blank" >
     			Ojciec chrzestny II</a></td>
     		<td class="rok">1974</td>
		<td class="ocena"></td>
  		</tr>
  		
  		<tr>
     		<td>4</td>
     		<td>
     		
     		<a download="image.jpg" 
     				href="https://images-na.ssl-images-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_UY67_CR0,0,45,67_AL_.jpg" 
     		title="Image">
    			<img alt="Okładka" 
    				src="https://images-na.ssl-images-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_UY67_CR0,0,45,67_AL_.jpg">
    		</a>
     		
     			</td>
     		<td><a href="http://www.imdb.com/title/tt0468569/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2398042102&pf_rd_r=0AFDZSJRC451MA1WXMB2&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_4"
     			 target="_blank" >
     			Mroczny Rycerz</a></td>
     		<td class="rok">2008</td>
		<td class="ocena"></td>
  		</tr>
  		
  		<tr>
     		<td>5</td>
     		<td>
     		
     		<a download="image.jpg" 
     				href="https://images-na.ssl-images-amazon.com/images/M/MV5BMWU4N2FjNzYtNTVkNC00NzQ0LTg0MjAtYTJlMjFhNGUxZDFmXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_UX45_CR0,0,45,67_AL_.jpg" 
     		title="Image">
    			<img alt="Okładka" 
    				src="https://images-na.ssl-images-amazon.com/images/M/MV5BMWU4N2FjNzYtNTVkNC00NzQ0LTg0MjAtYTJlMjFhNGUxZDFmXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_UX45_CR0,0,45,67_AL_.jpg">
    		</a>
     		
     			</td>
     		<td><a href="http://www.imdb.com/title/tt0050083/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2398042102&pf_rd_r=0AFDZSJRC451MA1WXMB2&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_5"
     			 target="_blank" >
     			Dwunastu gniewnych ludzi</a></td>
     		<td class="rok">1957</td>
		<td class="ocena"></td>  		
		</tr>
  		
  		<tr>
     		<td>6</td>
     		<td>
     		
     		<a download="image.jpg" 
     				href="https://images-na.ssl-images-amazon.com/images/M/MV5BNDE4OTMxMTctNmRhYy00NWE2LTg3YzItYTk3M2UwOTU5Njg4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UX45_CR0,0,45,67_AL_.jpg" 
     		title="Image">
    			<img alt="Okładka" 
    				src="https://images-na.ssl-images-amazon.com/images/M/MV5BNDE4OTMxMTctNmRhYy00NWE2LTg3YzItYTk3M2UwOTU5Njg4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UX45_CR0,0,45,67_AL_.jpg">
    		</a>
     		
     			</td>
     		<td><a href="http://www.imdb.com/title/tt0108052/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2398042102&pf_rd_r=0AFDZSJRC451MA1WXMB2&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_6"
     			 target="_blank" >
     			Lista Schindlera</a></td>
     		<td class="rok">1993</td>
		<td class="ocena"></td>
  		</tr>
  		
  		<tr>
     		<td>7</td>
     		<td>
     		
     		<a download="image.jpg" 
     				href="https://images-na.ssl-images-amazon.com/images/M/MV5BMTkxMTA5OTAzMl5BMl5BanBnXkFtZTgwNjA5MDc3NjE@._V1_UY67_CR0,0,45,67_AL_.jpg" 
     		title="Image">
    			<img alt="Okładka" 
    				src="https://images-na.ssl-images-amazon.com/images/M/MV5BMTkxMTA5OTAzMl5BMl5BanBnXkFtZTgwNjA5MDc3NjE@._V1_UY67_CR0,0,45,67_AL_.jpg">
    		</a>
     		
     			</td>
     		<td><a href="http://www.imdb.com/title/tt0110912/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2398042102&pf_rd_r=0AFDZSJRC451MA1WXMB2&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_7"
     			 target="_blank" >
     			Pulp Fiction</a></td>
     		<td class="rok">1994</td>
		<td class="ocena"></td>
  		</tr>
  		
  		<tr>
     		<td>8</td>
     		<td>
     		
     		<a download="image.jpg" 
     				href="https://images-na.ssl-images-amazon.com/images/M/MV5BYWY1ZWQ5YjMtMDE0MS00NWIzLWE1M2YtODYzYTk2OTNlYWZmXkEyXkFqcGdeQXVyNDUyOTg3Njg@._V1_UX45_CR0,0,45,67_AL_.jpg" 
     		title="Image">
    			<img alt="Okładka" 
    				src="https://images-na.ssl-images-amazon.com/images/M/MV5BYWY1ZWQ5YjMtMDE0MS00NWIzLWE1M2YtODYzYTk2OTNlYWZmXkEyXkFqcGdeQXVyNDUyOTg3Njg@._V1_UX45_CR0,0,45,67_AL_.jpg">
    		</a>
     		
     			</td>
     		<td><a href="http://www.imdb.com/title/tt0167260/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2398042102&pf_rd_r=0AFDZSJRC451MA1WXMB2&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_8"
     			 target="_blank" >
     			Władca Pierścieni: Powrót króla</a></td>
     		<td class="rok">2003</td>
		<td class="ocena"></td>
  		</tr>
  		
  		<tr>
     		<td>9</td>
     		<td>
     		
     		<a download="image.jpg" 
     				href="https://images-na.ssl-images-amazon.com/images/M/MV5BOTQ5NDI3MTI4MF5BMl5BanBnXkFtZTgwNDQ4ODE5MDE@._V1_UX45_CR0,0,45,67_AL_.jpg" 
     		title="Image">
    			<img alt="Okładka" 
    				src="https://images-na.ssl-images-amazon.com/images/M/MV5BOTQ5NDI3MTI4MF5BMl5BanBnXkFtZTgwNDQ4ODE5MDE@._V1_UX45_CR0,0,45,67_AL_.jpg">
    		</a>
     		
     			</td>
     		<td><a href="http://www.imdb.com/title/tt0060196/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2398042102&pf_rd_r=0AFDZSJRC451MA1WXMB2&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_9"
     			 target="_blank" >
     			Dobry, zły i brzydki</a></td>
     		<td class="rok">1966</td>
		<td class="ocena"></td>
  		</tr>
  		
  		
  		<tr>
     		<td>10</td>
     		<td>
     		
     		<a download="image.jpg" 
     				href="https://images-na.ssl-images-amazon.com/images/M/MV5BZGY5Y2RjMmItNDg5Yy00NjUwLThjMTEtNDc2OGUzNTBiYmM1XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UY67_CR0,0,45,67_AL_.jpg" 
     		title="Image">
    			<img alt="Okładka" 
    				src="https://images-na.ssl-images-amazon.com/images/M/MV5BZGY5Y2RjMmItNDg5Yy00NjUwLThjMTEtNDc2OGUzNTBiYmM1XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UY67_CR0,0,45,67_AL_.jpg">
    		</a>
     		
     			</td>
     		<td><a href="http://www.imdb.com/title/tt0137523/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2398042102&pf_rd_r=0AFDZSJRC451MA1WXMB2&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_10"
     			 target="_blank" >
     			Podziemny krąg</a></td>
     		<td class="rok">1999</td>
		<td class="ocena"></td>
  		</tr>
  		
  		
  		
 		</tbody>
	</table>

</body>
</html>
