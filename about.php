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
	<title><?php $template->showTitle(); ?> - CV</title>
	<?php templateClass::getLibs(); ?>
</head>
<header><?php $template->showLogo(); ?></header>
<nav class="navbar navbar-inverse"><?php $template->showNavBar(); ?></nav>

<main>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 text-center"></div>
    <div class="col-md-8">
      <div class="container-fluid">
        <h1 class="text-center text-primary">CV (Curriculum Vitae)</h1>
        <div class="row">
              <div class="col-md-4 col-xs-12 text-primary">
                <h2>Personas dati</h2>
                <img src="img/avatar.png" class="img-responsive" alt=""/>
              </div>
              <div class="col-md-8 col-xs-12">
                <h3 class="text-muted"><b>Viesturs Lapiņš</b></h3>
                <p><span class="glyphicon glyphicon-phone text-info"></span> -</p>
                <p><span class="glyphicon glyphicon-envelope text-info"></span> lapinsviesturs@gmail.com</p>
                <p><span class="glyphicon glyphicon-globe text-info"></span> http://vlgaming.id.lv</p>
                <p>Dzimums: <b>Vīrietis</b> | Dzimšanas datums: <b>07/01/1996</b> | Pilsonība: <b>Latvijas</b></p>
              </div>
        </div>

        <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><h2>Vakance</h2></div>
              <div class="col-md-8 col-xs-12"><h3><b>Programmētājs</b></h3></div>
        </div>

        <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><h2>Izglītība</h2></div>
              <div class="col-md-8 col-xs-12"><p></p></div>
        </div>
        <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><h5 class="text-primary"><b>01/09/2003-09/06/2012</b></h5></div>
              <div class="col-md-8 col-xs-12">
                <p class="text-info"><b>Pamata izglītība</b></p>
                <p class="text-success"><b>Iegūts atestāts par pamata izglītību</b></p>
                <p><b>Pūņu pamatskola</b>, Pūņas (Latvija)</p>
              </div>
        </div>
        <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><h5 class="text-primary"><b>01/09/2012-08/09/2014</b></h5></div>
              <div class="col-md-8 col-xs-12">
                <p class="text-info"><b>Vidējā izglītība</b></p>
                <p><b>Dundagas vidusskola</b>, Dundaga (Latvija)</p>
                <p>- Starpnovadu Ekonomikas olimpiādē iegūta 3.vieta</p>
                <p>- Starpnovadu teātra skatē iegūta II.pakāpe kopā ar Dundagas vidusskolas tēatri</p>
              </div>
        </div>
        <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><h5 class="text-primary"><b>08/09/2014-12/06/2015</b></h5></div>
              <div class="col-md-8 col-xs-12">
                <p class="text-success"><b>Iegūts atestāts par vidējo izglītību</b></p>
                <p><b>Talsu 2.vidusskola</b>, Talsi (Latvija)</p>
              </div>
        </div>
        <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><h5 class="text-primary"><b>01/09/2016-pašlaik</b></h5></div>
              <div class="col-md-8 col-xs-12">
                <p class="text-info"><b>Profesionālā izglītība</b></p>
                <p><b>PIKC Rīgas Valsts tehnikums</b>, Rīga (Latvija)</p>
              </div>
        </div>

      <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><h2>Prasmes</h2></div>
              <div class="col-md-8 col-xs-12"><p></p></div>
        </div>
        <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><b>Dzimtā valoda</b></div>
              <div class="col-md-8 col-xs-12">
              <p>latviešu</p>
              </div>
        </div>
         <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><b>Citas valodas</b></div>
              <div class="col-md-8 col-xs-12">
              <p>angļu, krievu</p>
              </div>
        </div>
        <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><b>Komunikācijas prasmes</b></div>
              <div class="col-md-8 col-xs-12">
              <p>- spēj rast kopīgu valodu, uzklausīt un sniegt padomus; draudzīgs un izpalīdzīgs</p>
              </div>
        </div>
        <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><b>Ar darba pienākumiem saistītās prasmes</b></div>
              <div class="col-md-8 col-xs-12">
              <p>- prasme noteikt un novērst datora problēmas; programmēt HTML, CSS, PHP, JQUERY, JAVA, VBA, Pascal, C++; izmantot Bootstrap, GitHub; atbildības sajūta un precizitāte pret darbu</p>
              </div>
        </div>
        <div class="row">
              <div class="col-md-4 col-xs-12 text-primary"><b>Digitālās prasmes</b></div>
              <div class="col-md-8 col-xs-12">
              <p>- spēj rīkoties ar Microsoft Word, Excel, Powerpoint, Code Blocks, Hyper-V, Oracle VirtualBox, Sublime Text, CorelDRAW, GIMP 2, Vegas Pro un citām lietojumprogrammām</p>
              <p>- pārzina Windows un Linux darbstacijas, un arī serverus, prot tās uzstādīt un konfigurēt</p>
              <p>- spēj programmēt C++, Java, VBA, Pascal, PHP programmēšanas valodās</p>
              <p>- spēj programmēt un izmantot HTML, CSS, Bootstrap</p>
              </div>
        </div>
      </div>
    </div>

    <div class="col-md-2 text-center"></div>
  </div>
</div>
</main>

<footer class="panel-footer text-center">
	<?php $template->showFooter(); ?>
</footer>

</html>
