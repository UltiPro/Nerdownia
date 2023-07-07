<?php
	session_start();

	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{

	}
	else
	{
		header('LOCATION: PHP/trescdostepna.php');
		exit();		
	};
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<meta name="robots" content="index">
	<meta name="googlebot" content="noarchive;">
	<meta name="description" content="Strona nerdów - JS i PHP!!!">
	<meta name="keywords" content="Serwery, Gry, Kursy, JavaScript, PHP">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia - JS i PHP</title>	
	<link rel="shortcut icon" href="PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="CSS/responsive.css" type="text/css" />		
	<link rel="stylesheet" href="CSS/kursy.css" type="text/css" />			
	<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="JS/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="JS/timer.js"></script>
	<script type="text/javascript" src="JS/scrollgora.js"></script>
	<script type="text/javascript" src="JS/sliderjsiphp.js"></script>
</head>
<body onload="odliczanie(); zmienslajd();">
	<div class="strona">
		<a href="#" class="scrollgora"></a>
<!-- Menu -->
<header>
	<div class="menugora">
<?php
	
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
		echo "<div class='loginbox'>";	
			echo "<div class='tekstloged'>";
				echo "Witaj <span class='colorloginu'>".$_SESSION['nazwa']."</span> !<br />";
				echo "Email: <span class='colorloginu'>".$_SESSION['email']."</span><br/>";
				echo "Premium: <span class='colorloginu'>".$_SESSION['premium']."</span><br/>";
				echo "<a href='PHP/USTAWIENIA/ustawienia.php' class='ustawienia'>Ustawienia!</a>";
				echo "<a href='PHP/wyloguj.php' class='wyloguj'>Wyloguj się!</a>";
			echo "</div>";
		echo "</div>";
	}	
	else
	{
		echo "<div class='loginbox'>";
			echo "<a href='PHP/logowanie.php' class='log'>Zaloguj Się</a>";
			echo "<a href='PHP/rejestracja.php' class='rej'>Zarejestruj Się</a>";
		echo "</div>";
	}
?>
		<div class="tytul"><h1><a href="http://nerdownia.ddns.net/" class="odnosnikimenu">Nerdownia</a></h1></div>
		<h3 class="zegar"><div id="zegar"></div></h3>
	<div class="oddzialka"></div>
<nav>
<?php include("PHP/MENU/menu.php"); ?>
</nav>
	<div class="oddzialka2"></div>
	</div>
</header>
<!-- KONIECMENU -->
<!-- TREŚĆ -->
<main>
<div id="slider"></div>
	<div class="tresc">
	<!-- LEWY -->
		<article>
			<div class="lewy">
				<header>
					<div class="rodzajkursu">
						Dostępne Kursy
					</div>
				</header>
				<section>
					<div>
						<a href="https://www.youtube.com/watch?v=OcwON22ctYc&list=PLOYHgt8dIdoxTUYuHS9ZYNlcJq5R3jBsC&index=1" target="blank" class="kursa"><fieldset class="kursyt"><legend>YT - JavaScript</legend></fieldset></a>
						<a href="https://www.youtube.com/watch?v=tD0Q5QwoQJI&list=PLOYHgt8dIdox81dbm1JWXQbm2geG1V2uh&index=2" target="blank" class="kursa"><fieldset class="kursyt"><legend>YT - PHP</legend></fieldset></a>
					</div>
				</section>
			</div>
		</article>
	<!-- KONIEC LEWY -->
	</div>
</main>
<!-- KONIEC TREŚĆ -->
<footer>
	<div class="menudulopacity9"></div>
	<div class="menudulopacity8"></div>
	<div class="menudulopacity7"></div>
	<div class="menudulopacity6"></div>
	<div class="menudulopacity5"></div>
	<div class="menudulopacity4"></div>
	<div class="menudulopacity3"></div>
	<div class="menudulopacity2"></div>
	<div class="menudulopacity1"></div>
</footer>
	</div>
</body>
</html>