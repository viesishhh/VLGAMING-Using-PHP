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
	<title><?php $template->showTitle(); ?> - Raksti</title>
	<?php templateClass::getLibs(); ?>
</head>
<header><?php $template->showLogo(); ?></header>
<nav class="navbar navbar-inverse"><?php $template->showNavBar(); ?></nav>

<main>

  <div class="jumbotron text-center">
    <h1>Under construction!</h1>
    <p>Coming soon!</p>
  </div>

  <div class="col-xs-12">
    <img src="img/under_construction.jpg" class="img-responsive"></img>
  </div>
    
</main>

<footer class="panel-footer text-center">
	<?php $template->showFooter(); ?>
</footer>

</html>