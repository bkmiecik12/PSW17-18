<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Recenzje filmów - najnowsze</title>
  <meta name="description" content="Recenzje filmów - menu">
  <meta name="keywords" content="Film, ranking, recenzja, premiery, menu">
  
  <script src="js/dom3.js"></script>
  
  <style type="text/css">
  /* Menu General Styles */
.menuBackground {
	background: brown;
}
.dropDownMenu a {
	color: #FFF;
}
.dropDownMenu,
.dropDownMenu ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.dropDownMenu li {
	position: relative;
}
.dropDownMenu a {
	padding: 10px 20px;
	display: block;
	text-decoration: none;
}
.dropDownMenu a:hover {
	background: #000;
}


/* Level 1 Drop Down Menu */
.dropDownMenu > li {
	display: inline-block;
	vertical-align: top;
	margin-left: -4px; /* solve the 4 pixels spacing between list-items */
}
.dropDownMenu > li:first-child {
	margin-left: 0;
}
.dropDownMenu > li > a {}
.dropDownMenu > li > a:hover {}
  /* Level 2 */
.dropDownMenu > li > ul {
	text-align: left;
	width: auto; /* change auto value with 200px if you want a bigger menu */
	display: none;
	background: #5DBB04;
	position: absolute;
	top: 100%;
	left: 0;
	z-index: 9999999; /* if you have YouTube iframes, is good to have a bigger z-index so the video can appear above the video */
}
.dropDownMenu > li:hover > ul {
	display: block;
}
.dropDownMenu ul li a {}
.dropDownMenu ul li a:hover {}
/* Level 3 */
.dropDownMenu > li > ul > li > ul {
	text-align: left;
	display: none;
	background: #E7B400;
	position: absolute;
	left: 100%;
	top: 0;
	z-index: 9999999;
}
.dropDownMenu > li > ul > li:hover > ul {
	display: block;
}
.dropDownMenu ul ul li {}
.dropDownMenu ul ul li a {}
.dropDownMenu ul ul li a:hover {}
  </style>

  <!--aaa-->
</head>

<body>


<div class="menuBackground">
	<ul class="dropDownMenu">
		<li><a href="#">Home</a></li>
		<li><a href="#">Web Design</a>
			<ul>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JS</a></li>
			</ul>
		</li>
		<li><a href="#">Programming</a>
			<ul>
				<li><a href="#">C++</a></li>
				<li><a href="#">WordPress</a>
					<ul>
						<li><a href="#">Hacks</a></li>
						<li><a href="#">Plugins</a></li>
						<li><a href="#">Shortcodes</a></li>
					</ul>
				</li>
				<li><a href="#">PHP</a></li>
				<li><a href="#">jQuery</a></li>
			</ul>
		</li>
		<li><a href="#">Resources</a>
			<ul>
				<li><a href="#">Icons</a></li>
				<li><a href="#">Fonts</a></li>
				<li><a href="#">Wallpapers</a></li>
			</ul>
		</li>
		<li><a href="#">Tips and Tricks</a></li>
	</ul>
</div>

</body>
</html>
