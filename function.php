<?php
	class templateClass{
		var $author = "Viesturs Lapiņš";
		var $year = "2017";
		var $name = "VLGAMING";
		var $logoUrl = "./img/logo.svg";

		function showAuthor(){
			echo $this->author;
		}

		function showTitle(){
			echo $this->name;
		}

		function showYear(){
			echo $this->year;
		}

		function showLogo(){
			echo '<img class="img-responsive center-block" src="'.$this->logoUrl.'" id="logo"/>';
		}

		public static function getLibs(){
			echo '
				  <link href="./css/normalize.css" rel="stylesheet">
				  <link href="./css/bootstrap.min.css" rel="stylesheet">
				  <script src="./js/jquery-3.1.1.min.js"></script>
				  <script src="./js/bootstrap.js"></script>
				  <script src="./js/lightbox.js"></script>
				  <link rel="stylesheet" type="text/css" href="./css/style.css"/>
				  <link href="./css/lightbox.css" rel="stylesheet">

				';
		}

		public function showNavBar(){
			echo '
				  <div class="container-fluid">
				      <div class="navbar-header">
				        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				         <span class="icon-bar"></span>
				         <span class="icon-bar"></span>
				         <span class="icon-bar"></span>
				        </button>
				        <a class="navbar-brand" href="index.php">'.$this->name.'</a>
				      </div>
				    <div class="collapse navbar-collapse" id="navbar">
				    <ul class="nav navbar-nav navbar-right">
				      <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> SĀKUMS</a></li>
				      <li class="dropdown">
				      <li><a href="news.php"><span class="glyphicon glyphicon-pencil"></span> RAKSTI</a></li>
				      <li class="dropdown">
				          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-picture"></span> GALERIJAS<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="gallery.php">JAUNUMI</a></li>
				            <li><a href="retro.php">RETRO</a></li>
				          </ul>
				      <li><a href="video.php"><span class="glyphicon glyphicon-film"></span> VIDEO</a></li> 
				      <li class="dropdown">
				          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> PAR MUMS<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="about.php">CV</a></li>
				            <li><a href="contacts.php">KONTAKTI</a></li>
				          </ul>
				    </ul>
				  </div>
				  </div>
				';
		}


        public function showFooter(){
            echo '
  					<p class="text-muted">© '.$this->year.' '.$this->name.' Visas tiesības aizsargātas. Jebkādas informācijas 
  					pārpublicēšana pieļaujama tikai ar '.$this->name.' rakstisku atļauju.<br>
  					Mājaslapu veidojis <b>'.$this->author.'</b>.
  					</p>
            ';
        }

        public static function lightboxImg($imgUrl, $imgTitle, $galleryName){
        	    echo '
				     <a href="'.$imgUrl.'" data-lightbox="'.$galleryName.'" data-title="'.$imgTitle.'"><img src="'.$imgUrl.'" alt="" class="thumbnail"></a>
				     ';
        }

        public static function videoYouTube($videoUrl){
        		echo '
				      <div class="embed-responsive embed-responsive-16by9">
				      <iframe class="embed-responsive-item" src="'.$videoUrl.'" frameborder="0" allowfullscreen></iframe>
				      </div>
        		';
        }

	}



?>
