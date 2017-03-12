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

    <div class="container">
  <h1 class="text-center">Kontakti</h1>
  <div class="row">
    <div class="col-md-4 col-xs-12">
    <h2>Viesturs Lapiņš</h2>
    <img src="img/avatar.png" class="img-responsive" width="200" height="auto"></img>
    <p>Tālrunis: <b>-</b></p>
    <p>e-pasts: <b>lapinsviesturs@gmail.com</b></p>
    <p>Mājaslapa: <a href="http://vlgaming.id.lv"><b>http://vlgaming.id.lv</b></a></p>
    </div>
  </div>
  <p></p>
  <div class="row">

<div id="map" style="width:auto; height:400px;"></div>

    <script>
    function initMap() {
        var myLatLng = {lat: 57.2463, lng: 22.5894};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Talsi!'
        });
      }
    </script>
</main>

<footer class="panel-footer text-center">
	<?php $template->showFooter(); ?>
</footer>
    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLnswtIs4NwqXfRKQwqzL4cG9Y607f9Yc&callback=initMap" async defer></script>

</html>