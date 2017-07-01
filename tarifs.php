<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<?php
			require_once('inc/connection.php');
			require_once('inc/head.php');
		?>
	</head>
	
	<body class="container">
		
		<header class="row">
			<?php
				require_once('inc/header.php');
			?>
		</header>
		<div class="row services">
            <div class="col-lg-12">
                <h2 class="page-header">Services Aérodrome</h2>
            </div>
            <div class="col-md-3 col-sm-8">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
						<img src="img/hangar.png" style="width: 100%;">
                    </div>
                    <div class="panel-body">
                        <h4>Stationnement</h4>
                        <p><?php
							$reponse = $bdd->query("SELECT ROUND(MIN(tarifjournalierbasesTTC),2) FROM redevanceabris");
							$donnees = $reponse->fetch();
							echo "à partir de ".$donnees['ROUND(MIN(tarifjournalierbasesTTC),2)']." <em>€/JOUR</em>";
						?></p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-8">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
						<img src="img/pump.png" style="width: 100%;">
                    </div>
                    <div class="panel-body">
                        <h4>Ravitaillement</h4>
                        <p><?php
							$reponse = $bdd->query("SELECT ROUND(MIN(TTC),2) FROM redevanceatterrissage");
							$donnees = $reponse->fetch();
							echo "à partir de ".$donnees['ROUND(MIN(TTC),2)']." <em>€/JOUR</em>";
						?></p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-8">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img src="img/cleanning.png" style="width: 100%;">
                    </div>
                    <div class="panel-body">
                        <h4>Nettoyage intérieur</h4>
                        <p>Adapté à vos besoins!</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
			</div>
			
			
			<div class="col-lg-12">
                <h2 class="page-header">Services Aéroclub</h2>
            </div>
            <div class="col-md-3 col-sm-8">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
						<img src="img/skydiving.png" style="width: 100%;">
                    </div>
                    <div class="panel-body">
                        <h>Parachutisme</h4>
                        <p>Bientôt disponible.</p>
                        <!-- <a href="#" class="btn btn-primary">En savoir plus</a> -->
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-8">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
						<img src="img/cessna.png" style="width: 100%;">
                    </div>
                    <div class="panel-body">
                        <h4>Baptême de l'air</h4>
                        <p><em>Bientôt disponible</em></p>
                        <!-- <a href="#" class="btn btn-primary">En savoir plus</a> -->
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-8">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img src="img/lesson.png" style="width: 100%;">
                    </div>
                    <div class="panel-body">
                        <h4>Leçon de pilotage</h4>
                        <p><em>Bientôt disponible</em></p>
                        <!-- <a href="#" class="btn btn-primary">En savoir plus</a> -->
                    </div>
                </div>
            </div>

             <div class="col-md-3 col-sm-8">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img src="img/glider.png" style="width: 100%;">
                    </div>
                    <div class="panel-body">
                        <h4>ULM</h4>
                        <p><em>Bientôt disponible</em></p>
                        <!-- <a href="#" class="btn btn-primary">En savoir plus</a> -->
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
