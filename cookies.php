<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Recenzje filmów - Walidacja formularza</title>
  <meta name="description" content="Recenzje filmów">
  <meta name="keywords" content="Film, ranking, recenzja, premiery">
  <link rel = "stylesheet" type = "text/css" href = "style/styles.css">

  <!--aaa-->
</head>

<body>
 <p>Id sesji: <?php echo $_COOKIE['idsesji'];?> </p>
<?php
		$styleBlock = sprintf('
			<style type="text/css">
				body {
				background-color:%s;
				color:%s;
				font-family:%s;
				}
			</style>
		', $_POST["tlo"], $_POST["tekst"], $_POST["czcionka"]);
		echo $styleBlock;
  ?> 
<p>Twój wybrany styl:</p>
<p>Kolor tła: 
<?php 
	$tlo=$_POST["tlo"];
	setcookie("tlo",$tlo);
	echo $tlo
?>
</p>
<p>Kolor czcionki: 
<?php 
	$tekst=$_POST["tekst"];
	setcookie("tekst",$tekst);
	echo $tekst
?>
</p>
<p>Rodzaj czcionki: 
<?php 
	$czcionka=$_POST["czcionka"];
	setcookie("czcionka",$czcionka);
	echo $czcionka
?>
</p>
<p> Kliknij <a href = "<?= $_SERVER['HTTP_REFERER'];?>">tutaj</a> aby powrócić

</body>
</html>
