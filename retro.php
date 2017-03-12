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
	<title><?php $template->showTitle(); ?> - Retro</title>
	<?php templateClass::getLibs(); ?>
</head>
<header><?php $template->showLogo(); ?></header>
<nav class="navbar navbar-inverse"><?php $template->showNavBar(); ?></nav>

<main>
  <div class="container text-center">
    <h1>Jaunumi</h1>

    <div class="row">
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image.jpg", "Crash Bandicoot", "retroGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image1.jpg", "Super Mario Bros. 3", "retroGames"); ?>
      </div>
        <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image2.jpg", "Sonic the Hedgehog", "retroGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image3.jpg", "Teenage Mutant Hero Turtles: The Hyperstone Heist", "retroGames"); ?>
      </div>
    </div>

     <div class="row">
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image4.png", "The Legend of Zelda", "retroGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image5.jpg", "Pokemon", "retroGames"); ?>
      </div>
        <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image6.jpg", "Final Fantasy VII", "retroGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image7.jpg", "Spyro the Dragon", "retroGames"); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image8.png", "Resident Evil", "retroGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image9.jpg", "Duck Tales 2", "retroGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image10.jpg", "Tetis", "retroGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/image11.jpg", "Mortal Kombat", "retroGames"); ?>
      </div>
    </div>

  </div>
</main>

<footer class="panel-footer text-center">
	<?php $template->showFooter(); ?>
</footer>

</html>