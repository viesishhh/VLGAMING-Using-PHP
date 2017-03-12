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
	<title><?php $template->showTitle(); ?> - Video</title>
	<?php templateClass::getLibs(); ?>
</head>
<header><?php $template->showLogo(); ?></header>
<nav class="navbar navbar-inverse"><?php $template->showNavBar(); ?></nav>

<main>
<div class="container text-center">
  <h1>Jaunākie video!</h1>
    <div class="row">
        <div class="col-xs-12 col-md-6">
          <?php templateClass::videoYouTube("https://www.youtube.com/embed/5kcdRBHM7kM"); ?>
        </div>
        <div class="col-xs-12 col-md-6">
         <?php templateClass::videoYouTube("https://www.youtube.com/embed/r5S8yTb_QNU"); ?>
        </div>
      </div>

    <div class="row">
        <div class="col-xs-12 col-md-6">
          <?php templateClass::videoYouTube("https://www.youtube.com/embed/yTGvWIoR1Dg"); ?>
        </div>
        <div class="col-xs-12 col-md-6">
         <?php templateClass::videoYouTube("https://www.youtube.com/embed/HduaXmGiRTQ"); ?>
        </div>
      </div>
   
</div>
</main>

<footer class="panel-footer text-center">
	<?php $template->showFooter(); ?>
</footer>

</html>