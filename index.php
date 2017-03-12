<?php 
	include ("./function.php");
	$template = new templateClass();
?>
<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title><?php $template->showTitle(); ?> - Sākums</title>
	<?php templateClass::getLibs(); ?>
</head>
<header><?php $template->showLogo(); ?></header>
<nav class="navbar navbar-inverse"><?php $template->showNavBar(); ?></nav>

<main>

    <div class="jumbotron text-center">
  <h1>Sveicināts VLgaming!</h1>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <p><b>Ja Tevi interesē jaunākie video spēļu un konsoļu jaunumi, tad šī mājaslapa ir radīts Tev! Šajā mājaslapā Tu atradāsi jaunāko spēļu un konsoļu jaunumus, recenzijas, video, attēlus, salīdzinājumus un mēs palīdzēsim atrast piemērotāko un aktuālāko videospēli tieši Tev! Dāvā nedaudz sava laika un, lūdzu, aizpildi šo <a href="survey.html">anketu</a>!</b></p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 text-center">
      <h2>Aktuālākais videospēļu pasaulē!</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <p>Šobrīd viens no aktuālākajiem videospēļu jaunumiem ir jaunās Nintendo konsole "Nintendo Switch" izziņošana. Nintendo sola, ka jaunā konsole tirgū nonāks 2017. gada martā, Nintendo Switch būs uzreiz pieejamas 50 spēles., tostarp arī The Legend of Zelda: Breath of the Wild, kas būs pieejama gan uz jaunās Nintendo Switch konsoles, gan arī uz iepriekšējās paaudzes Nintendo konsoli Wii U.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-6">
	<?php templateClass::videoYouTube("https://www.youtube.com/embed/f5uik5fgIaI"); ?>
    </div>
    <div class="col-xs-12 col-md-6">
	<?php templateClass::videoYouTube("https://www.youtube.com/embed/1rPxiXXxftE"); ?>
    </div>
  </div>
</div>
</main>

<footer class="panel-footer text-center">
	<?php $template->showFooter(); ?>
</footer>

</html>