<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Recenzje filmów - najnowsze</title>
  <meta name="description" content="Recenzje filmów">
  <meta name="keywords" content="Film, ranking, recenzja, premiery">
  
  <link rel = "stylesheet" type = "text/css" href = "style/styles.css">
  
  <script src="js/dom3.js"></script>
  
  <style type = "text/css">
			@-webkit-keyframes napis
			{
				from {color: purple;}
				to {color: green;}
			}
			@-moz-keyframes napis
			{
				from {color: purple;}
				to {color: green;}
			}
			@-o-keyframes napis
			{
				from {color: purple;}
				to {color: green;}
			}
			@-ms-keyframes napis
			{
				from {color: purple;}
				to {color: green;}
			}
			h2
			{ font-weight: bold;
				-webkit-animation-name: napis;
				-webkit-animation-duration: 2s;
				-webkit-animation-iteration-count: infinite;
				-moz-animation-name: napis;
				-moz-animation-duration: 2s;
				-moz-animation-iteration-count: infinite;
				-o-animation-name: napis;
				-o-animation-duration: 2s;
				-o-animation-iteration-count: infinite;
				-ms-animation-name: napis;
				-ms-animation-duration: 2s;
				-ms-animation-iteration-count: infinite;
				font-variant: small-caps;
				font-size:30px;
				background: linear-gradient(#4169E1, #B0E0E6);				
			}
			aside
			{ font-style:italic;
					font-size:1.2em; }
			p	
			{ font-size: 13pt;
				font-family: sans-serif; }
			footer
			{
				font-size:90%;}
			.special { color: purple; }
</style>

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
	
  <nav>
  <ul style="list-style-type:square">
  	<li style="border: 40px solid; margin: 20px;border-image-source: url(img/polska.jpg);border-image-repeat: repeat;border-image-slice: 9"><mark>Polskie</mark>
		<nav>
			<ol>
				<li><a href="#pokot">Pokot</a></li>
				<li><a href="#ostatnia">Ostatnia rodzina</a></li>
				<li><a href="#zgoda">Zgoda</a></li>
				<li><a href="#korony">Dwie korony</a></li>
			</ol>
		</nav>
	</li>
  	<li style="border: 40px solid; margin: 20px;border-image-source: url(img/swiat.png);border-image-slice: 40"><mark>Zagraniczne</mark>
		<nav>
			<ol>
				<li><a href="#zjawa">Zjawa</a></li>
				<li><a href="#wojna">Wojna</a></li>
				<li><a href="#blade">Blade Runner 2049</a></li>
				<li><a href="#snowman">The Snowman</a></li>
			</ol>
		</nav>
	</li>
  </ul>
  </nav>
  
  <section>
  <h2> Recenzje </h2>
  <article>
  <h3 id="pokot"><mark>Pokot</mark></h3>
  <p>
  W "Pokocie" Agnieszka Holland sięga po gatunek. Ekranizacja powieści Olgi Tokarczuk "Prowadź swój pług przez kości umarłych" jest jednocześnie czarnym kryminałem, thrillerem, baśnią i satyrą społeczną – wszystko to przyprawione elementami niesamowitości i grozy. W swoich najlepszych momentach film kojarzy się z dziełami Davida Lyncha z początku lat 90. i tym, jak twórca "Miasteczka Twin Peaks" portretuje amerykańską prowincję.<br>

Holland przygląda się polskiej. "Pokot" zabiera nas do małej miejscowości w Kotlinie Kłodzkiej, gdzie ciągle jest problem z zasięgiem sieci telefonii komórkowej. Życie toczy się tam powoli, dość prosto i jednostajnie. Jest biednie i ciasno, przed młodymi nie widać szczególnie zachęcających perspektyw. Okolicą rządzi grupa wpływowych mężczyzn: Prezes, właściciel lisiej fermy, ksiądz, komendant policji. Wszystkich łączy wspólny rytuał polowania. Przez cały rok, zimą, latem, wiosną i jesienią, przeczesują otaczające Kotlinę lasy, przetrzebiając obficie zamieszkującą je zwierzynę. 
  </p>
  <aside>
	Agnieszka Holland (ur. 28 listopada 1948 w Warszawie) – polska reżyserka filmowa i teatralna, scenarzystka filmowa i aktorka, od 1981 mieszka za granicą, od 2008 we Francji.
  </aside>
  <footer>
		Autor: <address>Jan Kowalski (jan.kowalski@wp.pl)</address>
  </footer>
    </article>
	<p>Ocena recenzenta: <meter value="8" min="1" max="10">8</meter> </p>
	<article>
  <h3 id="ostatnia"><mark>Ostatnia rodzina</mark></h3>
  
  <p>
  
  Jest takie angielskie słówko "ultimate". Po polsku: "ostateczny, końcowy". Także w sensie "optymalny", wieńczący proces. Ostatni i zarazem pierwszy; bo najlepszy, bo podstawowy, bo w wersji "dwa zero". Choć filmowa biografia familii Beksińskich po angielsku nazywa się "The Last Family", to tytułowa "ostatnia rodzina" urasta tu do miana takiej właśnie "ultimate", "ostatecznej" rodziny. "Ostatecznej", bo schyłkowej, niosącej nam jakieś ponure memento mori. W swoim groteskowym przejaskrawieniu – jak w soczewce – skupiającej dziwność, straszność i śmieszność ludzkiej egzystencji. Ważnej rodziny sportretowanej w ważnym filmie. <br>
  
  Jeszcze przed obejrzeniem "Ostatniej rodziny" usłyszałem dwa zarzuty wysunięte pod adresem pełnometrażowego kinowego debiutu Jana P. Matuszyńskiego. Pierwszy: że film opowiada o Beksińskich w sposób szkolny, prześlizgując się po kolejnych biograficznych przystankach bez większego selekcyjnego wysiłku. Oraz drugi: że od prozy życia reżyser woli sensację, że wyolbrzymia ekscentryczność bohaterów – zwłaszcza Tomka Beksińskiego – kosztem ich mniej "chwytliwych" cech, takich jak inteligencja, sympatyczność, charyzma. Obie pretensje wydają mi się jednak chybione. Tak, to prawda, Matuszyński pokazuje losy Beksińskich w biograficznym skrócie perspektywicznym, aranżuje coś w stylu życiorysowego "the best of". I faktycznie: dziwactwa, natręctwa, neurozy Zdzisława czy Tomka są po filmowemu wzmocnione, podane w barwnych, popisowych interpretacjach Andrzeja Seweryna i Dawida Ogrodnika. Nie widzę tu jednak scenariuszowego przypadku ani reżysersko-aktorskiej szarży.   
  
  </p>
  </article>
  <p>Ocena recenzenta: <meter value="7" min="1" max="10">7</meter> </p>
  <article>
  <h3 id="zgoda"><mark>Zgoda</mark></h3>
  
  <p>
  
  Jest rok 1945. Właśnie kończy się wojna. W Świętochłowicach na Śląsku organy bezpieczeństwa tworzą obóz pracy dla Niemców, Ślązaków i Polaków. Pod pretekstem ukarania zdrajców narodu polskiego, UB dokonuje czystek wśród „niechętnych komunistycznej władzy”. Do pracy w obozie zgłasza się młody chłopak Franek (Julian Świeżewski). Próbuje ocalić Annę (Zofia Wichłacz), w której jest zakochany. Nie wie, że wśród osadzonych znalazł się Erwin (Jakub Gierszał), Niemiec, jego przyjaciel sprzed wojny, który od dawna skrycie kocha się w dziewczynie… Franek dołącza do komunistów, naiwnie licząc, że uda mu się oszukać system. Już pierwsze dni pracy w obozie odzierają go ze złudzeń. A z czasem przekonuje się, że aby ocalić swoją ukochaną, będzie musiał poświęcić wszystko...
  
  </p>
  </article>
  <p>Ocena recenzenta: <meter value="6" min="1" max="10">6</meter> </p>
  <article>
  <h3 id="korony"><mark>Dwie korony</mark></h3>
  
  <p>
  
  "Dwie korony" to pierwszy film ukazujący nieznane dotąd powszechnie fakty z życia o. Maksymiliana Kolbe, począwszy od jego dzieciństwa, aż do heroicznej decyzji o oddaniu życia za współwięźnia w Auschwitz. Zdjęcia dokumentalne zostały zrealizowane w Polsce, Japonii i we Włoszech. W warstwie fabularnej filmu występują znakomici polscy aktorzy: Adam Woronowicz, Cezary Pazura, Maciej Musiał, Antoni Pawlicki, Dominika Figurska, Sławomir Orzechowski i inni. W części dokumentalnej wypowiadają się znawcy życia o. Maksymiliana: osoby duchowne i świeckie, między innymi Kazimierz Piechowski, który spotkał o. Maksymiliana w czasie pobytu w obozie, a słowa, które od niego wówczas usłyszał przemieniły go i ukierunkowały duchowo na całe życie...
  
  </p>
  </article>
  <p>Ocena recenzenta: <meter value="8" min="1" max="10">4</meter> </p>
  
  <section>
  <details>
  <summary><mark>Komentarze do polskich</mark></summary>
	<article>
		<p>Super te nasze produkcje :)</p>
	</article>
	<article>
		<p>Kocham polskie kino !</p>
	</article>
	</details>
  </section>
  
  
  <article>
  <h3 id="zjawa"><mark>Zjawa</mark></h3>
  
  <p>
  
  Kiedyś Alejandro González Iñárritu opowiadał głównie o klinczu przypadku i przeznaczenia. Dziś pochłania go raczej relacja iluzji i prawdy. W nagrodzonym Oscarem "Birdmanie" sprawdzał, jak radzi sobie z iluzją aktor, czyli człowiek wrzucony w rzeczywistość "wirtualnych", cudzych przeżyć. W "Zjawie" tymczasem bada, do czego jesteśmy zdolni w konfrontacji z siłami natury; z tym, co pierwotne, niebezpieczne i nieprzewidywalne. Bohater pierwszego obrazu lewitował w swojej garderobie i trudno o wyrazistszy symbol oderwania sztuki od rzeczywistości. Bohater drugiego, którego akcja rozgrywa się w 1823 roku w Górach Skalistych i jest częściowo oparta na faktach, czołga się brudny, spocony i zakrwawiony po zamrożonej glebie. I trudno być bliżej ziemi.  <br>
  
  Scenariusz "Zjawy" powstał na podstawie powieści Michaela Punkego "The Revenant: A Novel of Revenge" i legendy o Hugh Glassie, traperze, którzy został zaatakowany przez niedźwiedzia grizzly i, porzucony przez kompanów ekspedycji, samotnie przemierzył ponad trzysta kilometrów, by wrócić do domu. Podobno kierowała nim chęć zemsty i miłość. Między tymi dwiema emocjami rozpięta jest historia "Zjawy" i właśnie one są fundamentem westernu o samotnym mścicielu, kina wielkiej przygody, intymnej opowieści o utracie i żałobie oraz spektakularnego hollywoodzkiego widowiska z kaskaderskimi wyczynami.  
  
  </p>
  <aside>
	Alejandro González Iñárritu (ur. 15 sierpnia 1963 w mieście Meksyk) – meksykański reżyser, scenarzysta i producent filmowy. Od 2014 roku występuje jako Alejandro G. Iñárritu. W 2007 roku za film Babel Iñárritu jako pierwszy meksykański reżyser został nominowany do Oscara za najlepszą reżyserię, z kolei osiem lat później na 87. ceremonii rozdania Oscarów za film Birdman otrzymał trzy statuetki – dla najlepszego filmu, najlepszego reżysera i najlepszego scenariuszu oryginalnego.
  </aside>
  <footer>
		Autor: <address>Marek Mareczek (marek.mareczek@wp.pl)</address>
  </footer>
  </article>
  <p>Ocena recenzenta: <meter value="10" min="1" max="10">10</meter> </p>
  <article>
  <h3 id="wojna"><mark>Wojna</mark></h3>
 
  <p>
  
  2016 zostanie zapamiętany jako rok superbohaterskich pojedynków. Batman stawał już przeciwko Supermanowi, Daredevil przekomarzał się z Punisherem, pora na malowniczą kłótnię między dwoma filarami kinowego uniwersum Marvela: Iron Manem i Kapitanem Ameryką. Pierwszy z nich – w błyskotliwej interpretacji Roberta Downeya Juniora – zainaugurował marvelowski kinowy serial i do dziś jest jego znakiem rozpoznawczym. Drugi z kolei ma na koncie najlepszą z dotychczasowych produkcji studia, "Zimowego Żołnierza" w reżyserii braci Russo. Skłócenie tej pary było nieuniknione z samego tylko marketingowego punktu widzenia. Ale podobne utarczki między herosami to też po prostu komiksowy chleb powszedni, dobrodziejstwo konwencji. Przecież już w "Avengers" Jossa Whedona Tony Stark i Steve Rogers wymieniali pierwsze obelgi. "Wojna bohaterów" nie pojawia się więc znikąd, wypływa gładko z nawarstwiających się przez lata konfliktów. To brawurowe zwieńczenie dotychczasowych dokonań Marvela: ekscytujące widowisko, które nie unika prowokowanych przez siebie trudnych pytań, ale też nie traci z oka czystej kinowej frajdy. 
  
  </p>
  </article>
  <p>Ocena recenzenta: <meter value="9" min="1" max="10">9</meter> </p>
  <article>
  <h3 id="blade"><mark>Blade Runner 2049</mark></h3>
  
  <p>
  Jakiego koloru oczy miała Rachael? Jest taki moment w "Blade Runnerze 2049", że wypływa owa kwestia i jest to jeden z tych fabularnych "punktów bez powrotu" - wiecie, o czym mowa. Na usta cisną się pytania: jak ma się kopia do oryginału, jak ma się pamięć do rzeczywistości, co jest prawdą, a co kłamstwem? Przed dylematem stoi zaś nie tylko Rick Deckard, ale i Denis Villeneuve. Problem z podejmowaniem rzuconej przez Ridleya Scotta rękawicy jest bowiem taki, że każdy ma swojego "Blade Runnera". Oryginał przecież w pewnym sensie nie istnieje, a dokładniej: istnieje wielokrotnie. I w tym część jego uroku. "Łowca androidów", przemontowywany, przeinterpretowywany, rozmultimedializowany w gąszczu literackich pierwowzorów i kontynuacji, pecetowych spin-offów i alternatywnych soundtracków, przypomina przecież bardziej filmowy palimpsest niż filmową opokę. To film po Dickowsku migotliwy, film z tajemnicą; piękna katastrofa, której niedoskonałości sumują się jakimś cudem w arcydzieło. Weź tu, panie, kręć sequel. 
  
  </p>
  </article>
  <p>Ocena recenzenta: <meter value="8" min="1" max="10">8</meter> </p>
  <article>
  <h3 id="snowman"><mark>The Snowman</mark></h3>
  
  <p>
  
  Szef elitarnej ekipy detektywów (Michael Fassbender) prowadzi skomplikowane śledztwo. Wraz z nadejściem zimy ginie kolejna osoba. Detektyw boi się, że do miasta powrócił seryjny morderca. Z pomocą znakomitej rekrutki (Rebecca Ferguson) zaczyna łączyć stare sprawy kryminalne z nowymi brutalnymi zdarzeniami. Wie, że musi rozwiązać zagadkę, zanim spadnie kolejny pierwszy śnieg.
  
  </p>
  </article>
  <p>Ocena recenzenta: <meter value="10" min="1" max="10">10</meter> </p>
  
    <section>
	<details>
	<summary><mark>Komentarze do zagranicznych</mark></summary>
	<article>
		<p>Zjawa to najlepszy film roku !</p>
	</article>
	<article>
		<p>W końcu nowy blade runner...</p>
	</article>
	</details>
  </section>
  
</body>
</html>
