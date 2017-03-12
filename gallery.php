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
	<title><?php $template->showTitle(); ?> - Jaunumi</title>
	<?php templateClass::getLibs(); ?>
</head>
<header><?php $template->showLogo(); ?></header>
<nav class="navbar navbar-inverse"><?php $template->showNavBar(); ?></nav>

<main>
  <div class="container text-center">
    <h1>Jaunumi</h1>

    <div class="row">
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde.jpg", "Battelfield 1", "newGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde1.jpg", "Nintendo Switch", "newGames"); ?>
      </div>
        <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde2.jpg", "Mafia III", "newGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde3.jpg", "Call of Duty: Advanced Warfare", "newGames"); ?>
      </div>
    </div>

     <div class="row">
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde4.jpg", "Sid Meier's Civilization VI", "newGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde5.jpg", "The Elder Scrolls V: Skyrim Special Edition", "newGames"); ?>
      </div>
        <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde6.jpg", "GTA V", "newGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde7.jpg", "NHL 17", "newGames"); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde8.jpg", "No Man's Sky", "newGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde9.jpg", "Resident Evil 7: Biohazard", "newGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde10.jpg", "The Legend of Zelda: Breath of the Wild", "newGames"); ?>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-6">
        <?php templateClass::lightboxImg("img/bilde11.jpg", "Watch Dogs 2", "newGames"); ?>
      </div>
    </div>

  </div>
</main>

<footer class="panel-footer text-center">
	<?php $template->showFooter(); ?>
</footer>

</html>