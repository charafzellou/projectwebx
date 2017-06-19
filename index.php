<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<?php
			require_once('inc/head.php');
		?>
	</head>
	
	<body class="container">
		
		<header class="row">
			<?php
				require_once('inc/header.php');
			?>
		</header>
		
		<div class="content">
		<div class="post">
			
			
			<div id="myCarousel" class="row carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
			
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
				  <div class="item active">
					<img src="img/heli1.jpg" style="width:100%;">
				  </div>
			
				  <div class="item">
					<img src="img/heli5.jpg" style="width:100%;">
				  </div>
				
				  <div class="item">
					<img src="img/heli4.jpg" style="width:100%;">
				  </div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				  <span class="sr-only">Next</span>
				</a>
			</div>	
			
			<div class="row">
				<div class="col-lg-12">
					<div class="blocblanc">
					<h1>Aérodrome <span style="color: #e54f4e;">d'Evreux</span>, une autre vision &#8220;vue du ciel&#8221;</h1>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-6">
					<div class="blocgris center" style="height: 222px;">
					<p><strong>Aérodrome d'EVREUX - </strong>, ce sont des circuits touristiques<br />qui mettent la région d'Evreux à votre portée.</p>
					<p><strong>Aérodrome d'EVREUX - </strong>, c’est un accueil personnalisé<br />avec une équipe expérimentée<br />pour vous accueillir et vous présenter votre survol.</p>
					<p><strong>Aérodrome d'EVREUX - </strong>, c’est s’envoler, via notre site internet, en 5 actions :<br />choisir, réserver, acheter, profiter et s&#8217;émerveiller !</p>
					</div>
				</div>
				
				<div class="col-xs-6">
					<div class="blocgris center" style="height: 222px;">
						<p><strong>Embarquez à bord d’un hélicoptère Airbus,</strong>
						<br /><br />
						<strong>de type Ecureuil (5 places) avec votre pilote</strong><br /><strong>pour une découverte unique de la région.</strong>
						<br /><br />
						<strong>30 minutes de vol magiques et sensationnelles pendant</strong><br /><strong>lesquelles vous profiterez d’une vue extraordinaire.</strong>
						<br /><br />
						<strong>Partager un moment unique et chaleureux</strong><br /><strong>avec votre commandant de bord, et profitez de ce moment</strong>
						<br /><br />
						<strong>pour prendre des photos de ce panorama époustouflant !</strong></p>
					</div>
				</div>
			</div>
		</div>
		
		<footer class="row">
			<?php
				require_once('inc/footer.php');
			?>
		</footer>	
	</body>
</html>
